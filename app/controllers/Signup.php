<?php 

namespace Controller;
// Include Request.php 
//require_once(__DIR__ . '/../core/Request.php');
use \Model\User;
use \Core\Request;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * home class
 */
class Signup
{
	use MainController;

	public function index()
	{
		$data = [];
		
		$req = new Request;
		if($req->posted())
		{
			$user = new User();
			if ($user->validate($req->post()))
			{
				$password =password_hash($req->post('password'), PASSWORD_DEFAULT);
				$req->set('password',$password);
				$req->set('date', date("Y-m-d H:i:s"));


				$user->insert($req->post());
				redirect('login');
			}

			$data['errors'] = $user->errors;
		}
		
		//$user->create_table();

		$this->view('signup', $data);
	}

}