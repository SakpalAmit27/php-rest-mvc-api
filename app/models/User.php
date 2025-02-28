<?php


// @SakpalAmit27 : implementing the schema model of the database basically // 
class User
{

    private $conn;

    private $table = 'users';

    private $id;

    private $username;

    private $password;

    private $profile_pic;

    private $created_at;


    // a constructor with arg to assign the db to the conn (connection) //
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // a function to get the users // 

    public function getUsers()
    {
        $query = "SELECT id,profile_pic,username,created_at FROM users";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }


    // function to POST user // 
    public function createUser($username,$password,$profile_pic){

    }
}
