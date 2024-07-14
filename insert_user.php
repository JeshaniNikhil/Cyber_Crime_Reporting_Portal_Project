<?php 
header('Content-Type: application/json');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('./db/config.php');
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$temp_password = $_POST['password'] ?? '';
$password = hash('sha256', $temp_password);
$response = [];

if (!empty($name) && !empty($email) && !empty($password)) {
    $insert = "INSERT INTO `users_details`(`user_name`, `email`, `password_hash`) VALUES (:name, :email, :password)";
    $result = $pdo->prepare($insert);
    $result->bindParam(':name', $name);
    $result->bindParam(':email', $email);
    $result->bindParam(':password', $password);
    $result->execute();
    $response['status'] = 'success';
    $response['message'] = 'User registered successfully';
} else {
    $response['status'] = 'error';
    $response['message'] = 'All fields are required';
}

echo json_encode($response);
?>
