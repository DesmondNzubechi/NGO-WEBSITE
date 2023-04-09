<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

/*if (isset($_POST['submit'])) {

$messageb = $_POST['messagebody'];
$email =  $_POST['email'];

    try {*/
      $mail->isSMTP();
      $mail->Host = 'smtp.gmailcom';
      $mail->SMTPAuth = true;
      $mail->username = 'nzubestdesmond@gmail.com';
      $mail->password = 'zzphaqntykwmsqmg';
      $mail->SMTPSecure = 'tls';
      $mail->Port = 587;
/*
      $mail->setFrom('youremail@gmail.com');
      $mail->addAddress('nzubestdesmond@gmail.com');

      $mail->isHTML(true);
      $mail->subject = 'Message received from :' . $email;
      $mail->body = "Name: $email <br> Phone: $email <br> subject: $message";

      $mail->send();
      $alert = '<div> <span> Message sent! Thanks for contacting us</span>   </div>';
    } catch (Exception $e) {
        //throw $th;
        $alert = '<div> <span>'.$e->getMessage().' </span>   </div>';
   
    }
}*/


?>