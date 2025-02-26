<?php

class Database
{

    private $host = "localhost";
    private $db_name = "myapi";
    private $username = "root";

    private $password = "";

    private $conn;



    public function connect()
    {

        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host .
                    ";dbname=" . $this->db_name,
                $this -> username,
                $this -> password
            );
        } catch (PDOException $error) {
            echo "connection error : " . $error->getMessage();
        }

        return $this->conn;
    }
}
