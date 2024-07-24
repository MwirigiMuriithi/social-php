<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * settings class
 */
class Settings
{
	use MainController;

	public function index()
	{

		$this->view('settings');
	}

}