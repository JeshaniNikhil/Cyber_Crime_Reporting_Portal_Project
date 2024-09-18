<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Credentials: true');
session_start();
include "./db/config.php";

$email = $_POST['email'];
$temp_password = $_POST['password'];
$password = hash('sha256', $temp_password);

$response = [];

$qry = "SELECT * FROM users_details WHERE email=:email AND password_hash=:password";
$stmt = $pdo->prepare($qry);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->execute();

$rowcount = $stmt->rowCount();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($rowcount == 1) {
    // Store email and user_id in session
    $_SESSION['email'] = $row['email'];
    $_SESSION['user_id'] = $row['user_id']; // Assuming 'user_id' is the primary key in 'users_details'

    $response['status'] = 'success';
    $response['redirect'] = 'index2.php';
} else {
    $response['status'] = 'error';
    $response['message'] = 'User Name Or Password is Incorrect';
}

echo json_encode($response);
?>
