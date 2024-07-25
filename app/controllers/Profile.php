<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');
use \Core\Session;
use \Model\User;
/**
 * profile class
 */
class Profile
{
	use MainController;

	public function index()
	{

		$id = user('id');
		$ses = new Session;
		if(!$ses->is_logged_in())
		{
			redirect('login');
		}

		//get user row

		$user = new User;
		$data['row'] = $user->first(['id'=> $id]);
		$this->view('profile', $data);
	}

}