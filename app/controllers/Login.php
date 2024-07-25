<?php

namespace Controller;

use \Model\User;
use \Core\Request;
use \Core\Session;
defined('ROOTPATH') OR exit('Access Denied!');

/**
 * home class
 */
class Login
{
    use MainController;

    public function index()
    {
        $data = [];
        $req = new Request;

        if ($req->posted()) {
            $user = new User();
            $email = $req->post('email');
            $password = $req->post('password');

            $row = $user->first(['email' => $email]);

            if ($row) {
                // User found, verify password
                if (password_verify($password, $row->password)) {
                    // Authentication successful
                    $ses = new Session;
                    $ses->auth($row);
                    redirect('home');
                } else {
                    // Password is incorrect
                    $data['errors']['password'] = "Wrong email or password";
                }
            } else {
                // User not found
                $data['errors']['email'] = "Wrong email or password";
            }
        }

        $this->view('login', $data);
    }
}
