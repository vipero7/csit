<?php

namespace App\Controllers\Admin;

class HomeController
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
		view('admin/dashboard');
	}

}