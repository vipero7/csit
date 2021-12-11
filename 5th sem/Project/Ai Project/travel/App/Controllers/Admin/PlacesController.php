<?php

namespace App\Controllers\Admin;

use App\Models\Places;

class PlacesController
{
	public function __construct()
	{
		if(!isset($_SESSION['admin']['username']))
		{
			redirect('/admin/login');

		}


	}

	public function index()
	{
		$place = new Places ();
		$packages = $place->getPlacesOnly();

		view('admin/places/list', compact('packages'));
	}

	public function add()
	{
		$errors = [];

		if($_POST)
		{
			$place = $_POST['place'];
			$weather = $_POST['weather'];
			$crowd = $_POST['crowd'];
			$infrastructure = $_POST['infrastructure'];
			$simsar = $_POST['simsar'];
			$cost = $_POST['cost'];
			$distance = $_POST['distance'];
			$security = $_POST['security'];

			if($_FILES['image']['error'] > 0)
			{
				$errors['image'] = 'Please Choose image';

			} else{

				$allowed = [
 						'image/png',
 						'image/jpeg',
 						'image/jpg',
 						'image/gif'
				];

				if(in_array($_FILES['image']['type'], $allowed)){

					$filename = time() . '_' . $_FILES['image']['name'];

					$filepath = '/assets/uploads/' . $filename;

					$destination = ROOT_PATH . $filepath;

					if(move_uploaded_file($_FILES['image']['tmp_name'], $destination)){

						$image = $filepath;
					}
                  
                  }  else {

					$errors['image'] = "Image type not allowed";
				}


			}

			if(!$errors)
			{
				$places = new Places();

				$data = [
					'place'	=> $place,
  					'weather' => $weather,
  					'crowd' => $crowd,
  					'infrastructure' => $infrastructure,
  					'simsar' => $simsar,
  					'cost' => $cost,
  					'image' => $image,
  					'distance' => $distance,
  					'security' => $security,
				];

				$status = $places->save($data);



				if($status){

					$_SESSION['success'] = "Sucessfully Inserted";

				} else {
					$_SESSION['error'] = "Error inserting";
				}

				redirect('/admin/places/add');
			}


		}

        view('admin/places/add', compact('errors'));
	}

	public function edit($request)
	{
		$errors = [];
        $id = $request->id;

		 $places = new Places();
		 $pinfo = $places->findById($id);

		if($_POST){
			$place = $_POST['place'];
			$weather = $_POST['weather'];
			$crowd = $_POST['crowd'];
			$infrastructure = $_POST['infrastructure'];
			$simsar = $_POST['simsar'];
			$cost = $_POST['cost'];
			$distance = $_POST['distance'];
			$security = $_POST['security'];

			$image = '';

			$image = $pinfo['image'];

			if($_FILES['image']){


               	$allowed = [
                       
                       'image/png',
                       'image/jpg',
                       'image/jpeg',
                       'image/gif',
               	];


               	if(in_array($_FILES['image']['type'], $allowed)){

               		$filename = time() . '_' . $_FILES['image']['name'];

				$filepath = '/assets/uploads/' . $filename;

				$destination = ROOT_PATH . $filepath;



				if(move_uploaded_file($_FILES['image']['tmp_name'], $destination)) {
					 //echo 'uploaded';
					if(is_file($image)){
					unlink($image);
				 } 

					$image = $filepath;
		
				 }else{
               		$errors['image'] = "Image type not allowed";
               	}
             }
         }

             if(!$errors)
			{


				$places = new Places();

			$data = [

             		'place'	=> $place,
  					'weather' => $weather,
  					'crowd' => $crowd,
  					'infrastructure' => $infrastructure,
  					'simsar' => $simsar,
  					'cost' => $cost,
  					'image' => $image,
  					'distance' => $distance,
  					'security' => $security,

			];

			$status = $places->update($data,$id);

			if($status){

                $_SESSION['success'] = "Sucessfully Inserted";

			} else{

				$_SESSION['error'] = "Error inserting";
			}


			redirect('/admin/places/list');
          }


}
		view('/admin/places/edit', compact('pinfo','errors'));
		
}

 public function delete($request)
	{
		$id = $request->id;

		$places = new Places();

		$pinfo = $places->findById($id);

		if($pinfo){

			$status = $places->delete($id);

			$oldimage = ROOT_PATH . $pinfo['image'];

			if(is_file($oldimage)){
				unlink($oldimage);
			}

			if($status){

				$_SESSION['success'] = "Successfully Deleted";

			} else{

				$_SESSION['error'] = "Error in Deleting";

			}
		} else{
			$errors['image'] = "Cannot find product";
		}

		redirect('/admin/places/list', compact($errors));
	}

}