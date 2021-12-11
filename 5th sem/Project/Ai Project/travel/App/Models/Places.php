<?php

namespace App\Models;

use System\Library\Model;

class Places extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function save($data)
	{
		$sql = "INSERT INTO packages (place, image, weather, crowd, infrastructure, simsar, cost, distance, security)
		VALUES 
		(
			'{$data['place']}',
			'{$data['image']}',
			'{$data['weather']}',
			'{$data['crowd']}',
			'{$data['infrastructure']}',
			'{$data['simsar']}',
			'{$data['cost']}',
			'{$data['distance']}',
			'{$data['security']}'

		)";

		return $this->db->execute($sql);
	}

	public function getPlacesOnly()
	{
		$sql = " SELECT * FROM packages ";

		$places = $this->db->query($sql);

		return $places;
	}

	public function findById($id)
	{
		$sql = "SELECT * FROM packages WHERE sn = '{$id}'";

		return $this->db->find($sql);
	}

	public function update($data, $id)
	{
       $sql = "UPDATE packages SET  
          	place   		= '{$data['place']}',
			image   		= '{$data['image']}',
			weather 		= '{$data['weather']}',
			crowd   		= '{$data['crowd']}',
			infrastructure 	= '{$data['infrastructure']}',
			simsar 			= '{$data['simsar']}',
			cost 			= '{$data['cost']}',
			distance 		= '{$data['distance']}',
			security 		= '{$data['security']}'
              WHERE sn = '{$id}'
              ";

       return $this->db->execute($sql);
	}

	public function delete($id)
	{
		$sql = "DELETE FROM packages WHERE sn ='{$id}'";

		return $this->db->execute($sql);
	}

	public function getMostPopular()
	{
		$sql = " SELECT * FROM packages ORDER BY RAND() LIMIT 0,6 ";

		// SELECT * FROM Table_Name ORDER BY RAND() LIMIT 0,10;

		return $this->db->query($sql);
	}











	public function getProduct()
	{
	   $sql = "SELECT * FROM products
	   LEFT JOIN category ON products.cid = category.id";
	
     $products = $this->db->query($sql);

     return $products;

	 }

	public function totalRecords()
	{
		$sql = " SELECT count(*) as total FROM products ";

		$total = $this->db->find($sql);

		return $total['total'];
	}

	public function getDetail($proid)
	{
		$sql = " SELECT * FROM products
	   LEFT JOIN category ON products.cid = category.id WHERE proid= '$proid'";

	   	$product = $this->db->find($sql);

		return $product;
	}

	public function findCategoryId($proid)
	{
		$sql = "SELECT cid FROM products WHERE proid = '{$proid}'";

		$categoryid = $this->db->find($sql);

		return $categoryid;
	}

	public function getRelated($proid)
	{
		$categoryid = $this->findCategoryId($proid);

		$id = $categoryid['cid'];

		$sql = "SELECT * FROM products WHERE cid = '{$id}' ";

	    return $this->db->query($sql);
	}

	public function getLatestProduct()
	{
		$sql = "SELECT * FROM products
	   LEFT JOIN category ON products.cid = category.id ORDER BY created_at desc LIMIT 10";

	    $now = $this->db->query($sql);

        return $now;
    }

    public function getCategoryAll($cid)
    {
    	$sql = " SELECT * FROM products
	   LEFT JOIN category ON products.cid = category.id WHERE cid = '{$cid}'";

    	$products = $this->db->query($sql);

    	return $products;
    }

    public function randomProduct()
    {
      $sql = " SELECT * FROM products
	   LEFT JOIN category ON products.cid = category.id ORDER BY RAND() LIMIT 5 ";

      $products = $this->db->query($sql);

      return $products;
    }

	public function getProductOnly()
	{
		$sql = " SELECT * FROM products ";

		$products = $this->db->query($sql);

		return $products;
	}


}

