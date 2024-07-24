<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * home class
 */
class Post
{
	use MainController;

	public function index()
	{

		$this->view('post');
	}

}