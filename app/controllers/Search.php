<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * search class
 */
class Search
{
	use MainController;

	public function index()
	{

		$this->view('search');
	}

}