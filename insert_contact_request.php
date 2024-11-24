<?php
header('Content-Type: application/json');
require "Mail/phpmailer/PHPMailerAutoload.php";
include('./db/config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $comments = $_POST['comments'];
    $adminemail="nikhiljeshani9@gmail.com";
    $sql="INSERT INTO `contact_request`(`name`, `email`, `phone`, `subject`, `comments`) VALUES (:name, :email, :phone, :subject, :comments)";
    $qry=$pdo->prepare($sql);
    $status="Request Submitted";
    $qry->bindParam(':name', $name);
    $qry->bindParam(':email', $email);
    $qry->bindParam(':phone', $phone);
    $qry->bindParam(':subject', $subject);
    $qry->bindParam(':comments', $comments);
    $qry->execute();
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->Port=587;
            $mail->SMTPAuth=true;
            $mail->SMTPSecure='tls';
            $mail->Username=$email_for_send;
            $mail->Password=$password;
            $mail->setFrom($email_for_send, 'Contact Request');
            $mail->addAddress($adminemail);

            $mail->isHTML(true);
            $mail->Subject="Contact Request";
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
            "phone" => $phone,
            "subject" => $subject,
            "comments" => $comments
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
