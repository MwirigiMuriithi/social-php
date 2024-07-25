<?php

namespace Model;

defined('ROOTPATH') or exit('Access Denied!');

/**
 * User class
 */
class User
{
    use Model;

    protected $table = 'users';

    protected $allowedColumns = [
        'email',
        'password',
        'date',
        'username',
        'image'
    ];

    public $errors = [];

    public function validate($data)
    {
        $this->errors = [];

        if (empty($data['email'])) {
            $this->errors['email'] = "Email is required";
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Email is not valid";
        }

        if (empty($data['username'])) {
            $this->errors['username'] = "A username is required";
        } elseif (!preg_match("/^[a-zA-Z]+$/", $data['username'])) {
            $this->errors['username'] = "A username should only have letters with no spaces";
        }

        if (empty($data['password'])) {
            $this->errors['password'] = "Password is required";
        }

        return empty($this->errors);
    }

    public function create_table()
    {
        $query = "
        CREATE TABLE IF NOT EXISTS users (
            id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
            email VARCHAR(100) NOT NULL,
            password VARCHAR(250) NOT NULL,
            username VARCHAR(250) NOT NULL,
            image VARCHAR(250),
            date DATETIME DEFAULT CURRENT_TIMESTAMP,
            UNIQUE KEY username (username),
            UNIQUE KEY email (email)
        )
        ";

        $this->query($query);
    }
}
