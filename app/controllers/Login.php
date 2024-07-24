<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * home class
 */
class Login
{
	use MainController;

	public function index()
	{

		$this->view('login');
	}

}