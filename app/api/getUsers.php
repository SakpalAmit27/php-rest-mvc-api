<?php

header("Access-Control-Allow-Origin: *");

header('Content-Type: application/json');


include_once '../config/Database.php';
include_once '../models/User.php';


// creating instance of the files imported // 

// db instance and connecting to the db before getting the users // 

$database  = new Database();

$db = $database->connect();


// user intiating // 

$user = new User($db);

// getting the result // @SakpalAmit27
$result = $user->getUsers();

$num = $result->rowCount();

// checking if any user exist or !//

if ($num > 0) {
    $user_arr = array();

    while ($row =  $result->fetch(PDO::FETCH_ASSOC)) {

        extract($row);

        $user_item = array(
            'id' => $id,
            'username' => $username,
            'profile_pic' => $profile_pic,
            'created_at' => $created_at
        );

        array_push($user_arr, $user_item);
    }

    echo json_encode($user_arr);
} else {
    echo json_encode(array('message' => 'No users found'));
}
?>