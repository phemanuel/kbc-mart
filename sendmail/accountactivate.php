<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  
require 'vendor/autoload.php';
session_start();


		$firstname = $_SESSION['firstname'];
		$lastname = $_SESSION['lastname'];
		$email = $_SESSION['email'];
		$activation_code = $_SESSION['activation_code'];
		$userid = $_SESSION['userid'];
//======prepare message=====
$message = " 
						<h2>Thank you for Registering.</h2>
						<p>Please click the link below to activate your account.</p>
						<a href='http://localhost/ecomm/activate?code=".$activation_code."&user=".$userid."'>Activate Account</a>
					";

  
$mail = new PHPMailer(true);
  
//try {

$mail->SMTPDebug = 0;                   // Enable verbose debug output
$mail->isSMTP();                        // Set mailer to use SMTP
$mail->Host       = 'mail.eitc.com.ng';    // Specify main SMTP server
$mail->SMTPAuth   = true;               // Enable SMTP authentication
$mail->SMTPSecure = 'ssl';  
$mail->Port       = 465; 
$mail->Username   = 'no-reply@eitc.com.ng';     // SMTP username
$mail->Password   = 'noreply@2023';         // SMTP password
            // Enable TLS encryption, 'ssl' also accepted
               // TCP port to connect to
//=====

  
    $mail->setFrom('no-reply@eitc.com.ng', 'KBC Supermart');           
    $mail->addAddress($email);
    //$mail->addAddress('phemanuel@yahoo.com');
   // $mail->addAddress('miracle.kingsbranding@gmail.com');
       
    $mail->isHTML(true);                                  
    $mail->Subject = 'KBC Supermart Activation';
    $mail->Body    = $message;
    $mail->AltBody = 'Body in plain text for non-HTML mail clients';
    $mail->send();

    unset($_SESSION['firstname']);
	unset($_SESSION['lastname']);
	unset($_SESSION['email']);

    echo "<script>
window.location.href='../register';
</script>";
// } catch (Exception $e) {
//     echo "<script>
// alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
// window.location.href='https://oyschst.edu.ng';
// </script>";
    
// }
?>

