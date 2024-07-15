<?php
header('Content-Type: application/json');
require "Mail/phpmailer/PHPMailerAutoload.php";
include('./db/config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $domain = $_POST['domain'];
    $requirements = $_POST['requirements'];
    $adminemail="nikhiljeshani9@gmail.com";
    $testing_type = isset($_POST['testing_type']) ? implode(", ", $_POST['testing_type']) : "";
    $sql="INSERT INTO `web_request`(`name`, `email`, `domain`, `requirements`, `testing_type`) VALUES (:name, :email, :domain, :requirements, :testing_type)";
    $qry=$pdo->prepare($sql);
    $qry->bindParam(':name', $name);
    $qry->bindParam(':email', $email);
    $qry->bindParam(':domain', $domain);
    $qry->bindParam(':requirements', $requirements);
    $qry->bindParam(':testing_type', $testing_type);
    $qry->bindParam(':testing_type', $testing_type);
    $qry->execute();
            $mail = new PHPMailer;

            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->Port=587;
            $mail->SMTPAuth=true;
            $mail->SMTPSecure='tls';

            $mail->Username='nikhiljeshani2@gmail.com';
            $mail->Password='xpmppmehyvcackoo';

            $mail->setFrom('nikhiljeshani2@gmail.com', 'Web Testing Request');
            $mail->addAddress($adminemail);

            $mail->isHTML(true);
            $mail->Subject="Web Testing Request";
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
                <script>
                    alert("<?php echo "Register Successfully, OTP sent to " . $email ?>");
                    //window.location.replace('verification.php');
                </script>
                <?php
            }
            
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
