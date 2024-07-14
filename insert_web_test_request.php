<?php
header('Content-Type: application/json');
include('./db/config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $domain = $_POST['domain'];
    $requirements = $_POST['requirements'];
    $testing_type = isset($_POST['testing_type']) ? implode(", ", $_POST['testing_type']) : "";
    $sql="INSERT INTO `web_request`(`name`, `email`, `domain`, `requirements`, `testing_type`) VALUES (:name, :email, :domain, :requirements, :testing_type)";
    $qry=$pdo->prepare($sql);
    $qry->bindParam(':name', $name);
    $qry->bindParam(':email', $email);
    $qry->bindParam(':domain', $domain);
    $qry->bindParam(':requirements', $requirements);
    $qry->bindParam(':testing_type', $testing_type);
    $qry->execute();
    $response = array(
        "status" => "success",
        "message" => "Form submitted successfully!",
        "data" => array(
            "name" => $name,
            "email" => $email,
            "domain" => $domain,
            "requirements" => $requirements,
            "testing_type" => $testing_type
        )
    );
    echo json_encode($response);
} else {
    echo json_encode(array(
        "status" => "error",
        "message" => "Invalid request method"
    ));
}
?>
