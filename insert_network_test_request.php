<?php
header('Content-Type: application/json');
require "Mail/phpmailer/PHPMailerAutoload.php";
include('./db/config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $network_scope = $_POST['network_scope'];
    $requirements = $_POST['requirements'];
    $adminemail="nikhiljeshani9@gmail.com";
    $testing_type = isset($_POST['testing_type']) ? implode(", ", $_POST['testing_type']) : "";
    $sql="INSERT INTO `network_request`(`name`, `email`, `network_scope`, `requirements`, `testing_type`,`status`) VALUES (:name, :email, :network_scope, :requirements, :testing_type,:status)";
    $qry=$pdo->prepare($sql);
    $status="Request Submitted";
    $qry->bindParam(':name', $name);
    $qry->bindParam(':email', $email);
    $qry->bindParam(':network_scope', $network_scope);
    $qry->bindParam(':requirements', $requirements);
    $qry->bindParam(':testing_type', $testing_type);
    $qry->bindParam(':status', $status);
    $qry->execute();
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->Port=587;
            $mail->SMTPAuth=true;
            $mail->SMTPSecure='tls';
            $mail->Username=$email_for_send;
            $mail->Password=$password;
            $mail->setFrom($email_for_send, 'Network Testing Request');
            $mail->addAddress($adminemail);

            $mail->isHTML(true);
            $mail->Subject="Network Testing Request";
            $mail->Body="<p>Dear admin, </p> <h3>requester Email Is :$email And Name Is $name <br></h3>
            <br><br>
            <p>With regrads,</p>
            <b>Programming with Nikhil</b>
            ";
            if(!$mail->send()){
                ?>
                    <script>
                        alert("<?php echo "Register Failed, Invalid Email "?>");
                    </script>
                <?php
            }else{
                ?>
                <?php
            }
            
    $response = array(
        "status" => "success",
        "message" => "Form submitted successfully!",
        "data" => array(
            "name" => $name,
            "email" => $email,
            "network_scope" => $network_scope,
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
