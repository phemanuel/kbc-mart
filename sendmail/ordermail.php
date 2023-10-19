<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  
require 'vendor/autoload.php';
session_start();


		$payname =$_SESSION['payname'];
		$email = $_SESSION['email'];
		$amount = number_format($_SESSION['price_total'],2);
        $pay_id = $_SESSION['pay_id'];
        $payment_option = $_SESSION['payment_option'];
 
//======prepare message=====
$message = "
                        <p> Dear $payname , </p>
						<h2>Thank you for shopping with <u>KBC Supermart</u>.</h2>
						<p>Below is your order details.</p>
                        <table>
                        <tr> 
                        <td> Order ID:</td>
                        <td> $pay_id</td>
                        </tr>
                        <tr> 
                        <td> Amount Due:</td>
                        <td> $amount</td>
                        </tr>
                        <tr> 
                        <td> Payment Option:</td>
                        <td> $payment_option</td>
                        </tr>
                        <br>

                        </table>
						<a href='http://localhost/kbcmart/myorderview?orderid=".$pay_id."'>View Order</a>
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
    $mail->Subject = 'KBC Supermart Order';
    $mail->Body    = $message;
    $mail->AltBody = 'Body in plain text for non-HTML mail clients';
    $mail->send();

    //unset($_SESSION['firstname']);
	//unset($_SESSION['lastname']);
	//unset($_SESSION['email']);

    echo "<script>
window.location.href='../paymentcheck';
</script>";
// } catch (Exception $e) {
//     echo "<script>
// alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
// window.location.href='https://oyschst.edu.ng';
// </script>";
    
// }
?>

