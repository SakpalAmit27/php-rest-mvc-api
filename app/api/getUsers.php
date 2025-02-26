<?php

header("Access-Control-Allow-Origin: *");

header('Content-type : application/json');


include_once '../config/Database.php';
include_once '../models/User.php';


// creating instance of the files imported // 

// db instance and connecting to the db before getting the users // 

   $database  = new Database(); 

   $db = $database -> connect(); 


   // user intiating // 

   $user = new User($db); 

   // getting the result // @SakpalAmit27
   $result = $user -> getUsers(); 

   $num = $result -> rowCount(); 

?>
