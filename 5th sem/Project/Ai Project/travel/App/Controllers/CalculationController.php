<?php

namespace App\Controllers;

use App\Models\Places;
use App\Controllers\CosinesimilarityController;


class CalculationController
{
	
private function compute($sim, $userdata)
{
	$check = new CosinesimilarityController();

	$value = $check->similarity($sim, $userdata);

	return $value;
}


public function calculate()
{
	$w = ($_POST['weather']) 	;	
	$c = ($_POST['crowd']) 		;	
	$i = ($_POST['infra']) 		;	
	$s = ($_POST['simsar'])		;	
	$c = ($_POST['cost']) 		;	
	$d = ($_POST['distance']) 	;	
	$se = ($_POST['security']) 	;	

	$place = new Places();

	$data = $place->getPlacesOnly();

	$userdata = array($w, $c, $i, $s, $c, $d, $se);

foreach($data as $d)
{
	$weather = $d['weather'];
	$crowd = $d['crowd'];
	$infrastructure = $d['infrastructure'] ;
	$simsar = $d['simsar'];
	$cost = $d['cost'];
	$distance = $d['distance'];
	$security = $d['security'];


	$place = $d['place'];
	$image = $d['image'];

	$database = array($weather, $crowd, $infrastructure, $simsar, $cost, $distance, $security);

	$val = $this->compute($database, $userdata);

	$store[] = array(

				'value' => $val,
				'place' => $place,
				'image' => $image
	);

}

// print_r($store);
// die;

$sorted = quick_sort($store);

$value = array_slice($sorted, 0, 3);

view('display-places', compact('value'));


}

}

function quick_sort($array)
{
	// find array size
	$length = count($array);
	
	// base case test, if array of length 0 then just return array to caller
	if($length <= 1){
		return $array;
	}
	else{
	
		// select an item to act as our pivot point, since list is unsorted first position is easiest
		$pivot = $array[0];
		
		// declare our two arrays to act as partitions
		$left = $right = array();
		
		// loop and compare each item in the array to the pivot value, place item in appropriate partition
		for($i = 1; $i < count($array); $i++)
		{
			if($array[$i] < $pivot){
				$right[] = $array[$i];
			}
			else{
				$left[] = $array[$i];
			}
		}
		
		// use recursion to now sort the left and right lists
		return array_merge(quick_sort($left), array($pivot), quick_sort($right));
	}
}






