<?php

namespace App\Models;

use System\Library\Model;

class Users extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function loginCheck($username, $password)
	{

		$sql = " SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' AND role = 'admin' ";

		$userinfo = $this->db->find($sql);

		return $userinfo;
	}
}

