<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');
use \Model\User;
use \Core\Request;
use \Core\Session;
/**
 * ajax class
 */
class Ajax
{
	use MainController;

	public function index()
	{
		$ses = new Session;
		if(!$ses->is_logged_in())
		{
			die;
		}

        $req = new Request;
        $user = new User;
        $info['success'] = false;
        $info['message'] = '';
		if($req->posted())
        {
            $data_type = $req->input('data_type');

            if($data_type == 'profile-image')
            {
                $image_row = $req->files('image');
                show($image_row);
                $info['success'] = true;
            }

            echo json_encode($info);
        }
		
	}

}