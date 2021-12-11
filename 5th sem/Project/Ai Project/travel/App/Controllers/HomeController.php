<?php

namespace App\Controllers;
use App\Models\Places;

class HomeController
{
	public function __construct()
	{


	}

	public function index()
	{
		$place = new Places();

		$most = $place->getMostPopular();
		
		view('home', compact('most'));
	}

	public function rangeslider()
	{
		view('range-slider');
	}

}