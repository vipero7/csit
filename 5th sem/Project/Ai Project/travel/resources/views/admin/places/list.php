<?php view('admin/layouts/header');


view('admin/layouts/sidebar') ?>
      
     

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Places list</h1>
                        <h1 class="page-subhead-line">This is the Places list. You can see list of Places here.</h1>


                        <?php
                          
                         view('admin/layouts/message', compact('errors'))?>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Places List
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Name of Place</th>
                                            <th>Temperature</th> 
                                            <th>Crowd </th>          
                                            <th>Infrastructure </th>
                                            <th>Water Resources</th>         
                                            <th>Cost </th>          
                                            <th>Distance </th>             
                                            <th>Security </th>                
                                            <th>Image</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $sn = 1; ?>
                                        <?php foreach($packages as $data){ ?>
                                        <tr>
                                            <td><?php echo $sn++; ?> </td>
                                            <td><?php echo $data['place']; ?></td>
                                            <td><?php echo $data['weather']; ?></td>
                                            <td><?php echo $data['crowd']; ?></td>
                                            <td><?php echo $data['infrastructure']; ?></td>
                                            <td><?php echo $data['simsar']; ?></td>
                                            <td><?php echo $data['cost']; ?></td>
                                            <td><?php echo $data['distance']; ?></td>
                                            <td><?php echo $data['security']; ?></td>
                                       
                                            <td>
                                                <img src="<?php echo $data['image'];?>" width="100px">
                                             </td>
                                            <td> <a class="btn btn-primary" href="/admin/places/edit/<?php echo $data['sn'];?>">Edit</a> <a class="btn btn-danger" href="/admin/places/delete/<?php echo $data['sn'];?>">Delete</a>  </td>
                                          </tr>

                                        <?php } ?>

                                      <!--   <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td> <a class="btn btn-primary" href="">Edit</a> <a class="btn btn-danger" href="">Delete</a>  </td>
                                          
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                            <td> <a class="btn btn-primary" href="">Edit</a> <a class="btn btn-danger" href="">Delete</a>  </td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                  </div>


       
            </div>


            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>


<?php view('admin/layouts/footer') ?> 
