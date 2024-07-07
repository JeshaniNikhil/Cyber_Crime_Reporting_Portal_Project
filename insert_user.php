<?php 
header('Content-Type: application/json');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('./db/config.php');
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$response = [];

if (!empty($name) && !empty($email) && !empty($password)) {
    $insert="INSERT INTO `users_details`(`email`, `password_hash`) VALUES ('[value-1]','[value-2]','[value-3]')"
    $response['status'] = 'success';
    $response['message'] = 'User registered successfully';
} else {
    $response['status'] = 'error';
    $response['message'] = 'All fields are required';
}

echo json_encode($response);
?>
