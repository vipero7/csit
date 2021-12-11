<?php

namespace App\Controllers\Admin;
use App\Models\Users;

class LoginController
{
	public function login()
	{
		if($_POST)
		{
			$username = $_POST['username'];
			$password = sha1($_POST['password']);

			$user = new Users();
			$status = $user->loginCheck($username, $password);

			if($status)
			{
				$_SESSION['admin']['username'] = $status['username'];

				redirect('/admin/home');
			}

		}
		view('admin/login');
	}

	public function logout()
	{
		if(isset($_SESSION['admin']['username'])){

			unset($_SESSION['admin']['username']);
		

		redirect('/admin/login');
	    }

	   redirect('/admin/home');
	}
}