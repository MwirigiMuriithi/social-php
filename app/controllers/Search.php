<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');
use \Core\Session;
/**
 * search class
 */
class Search
{
	use MainController;

	public function index()
	{
		$ses = new Session;
		if(!$ses->is_logged_in())
		{
			redirect('login');
		}

		$this->view('search');
	}

}