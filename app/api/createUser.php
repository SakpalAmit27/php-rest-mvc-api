<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json");

include_once '../config/Database.php';
include_once '../controllers/UserController.php';

// Create database connection
$database = new Database();
$db = $database->connect();

// Initialize UserController
$userController = new UserController($db);

// Get JSON input
$data = json_decode(file_get_contents("php://input"), true);

// Call createUser function
$response = $userController->createUser($data);

// Return JSON response
echo json_encode($response);
