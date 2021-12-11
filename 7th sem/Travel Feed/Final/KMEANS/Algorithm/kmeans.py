import pandas as pd
import numpy as np
from Algorithm import algo
import mysql.connector


dbconfig = {'host': '127.0.0.1',
            'database': 'travel_feed',
            'user': 'root',
            'password': '',
            }
conn = mysql.connector.connect(**dbconfig)
cursor = conn.cursor()
#
# cursor.execute("""select id, pilgrims, foodie, adventure, water_body, nature_seeing, ancient from userprofiles""")
# d = cursor.fetchall()
# data = np.array(d)
# id= data[:,0]
# X = data[:,[1,2,3,5,5,6]]
data = pd.read_csv('data.csv')
X = data.to_numpy()
X = X.astype('int32')


final_clusters = algo.find_clusters(X)
cluster = algo.elbow_method(X, final_clusters)
print(cluster)
k = final_clusters[cluster]

cursor.execute("""truncate table user_clusters""")
conn.commit()
v = 0
for c in k:
    v = v+1
    cursor.execute("""insert into user_clusters 
            (user_id, cluster)
            values
            (%s, %s)""", (v,k[c]))
    conn.commit()
cursor.close()
conn.close()


