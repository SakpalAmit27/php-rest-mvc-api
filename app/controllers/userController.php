<?php

// @SakpalAmit27 : return the POST , created controller. // 

// @SakpalAmit27 importing model // 

include_once '../models/User.php';

class UserController
{
    private $user;

    public function __construct($db)
    {
        $this->user = new User($db);
    }

    public function createUser($data)
    {
        if (!isset($data['username']) || !isset($data['password']) || !isset($data['profile_pic'])) {
            return ["error" => "Missing required fields"];
        }

        $result = $this->user->createUser($data['username'], $data['password'], $data['profile_pic']);

        if ($result) {
            return ["message" => "User created successfully"];
        } else {
            return ["error" => "Failed to create user"];
        }
    }
}

?>
