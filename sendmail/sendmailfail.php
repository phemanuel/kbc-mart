<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  
require 'vendor/autoload.php';
session_start();

//-----mail for failed transaction-----
$emailaddykeep = $_SESSION['emailaddy'] ;
$stdnamekeep = $_SESSION['stdnamekeep'] ;
//$flktransref = $_SESSION['flick_transref'];
$transref = $_SESSION['transref'] ;
$datetime = date("Y-m-d H:i:s");
$amountkeep = number_format($_SESSION['totalfee'],2);
$paymenttype = $_SESSION['paymenttype'];
$transstatus = "Failed";
$response_desc = $_SESSION['response_desc'];
$stdnokeep= $_SESSION['stdnokeep'];
//======prepare message=====
$message1= "Dear ". $stdnamekeep. "," ;
$message2 = "We wish to inform you of your payment transaction with the following details:";
$message16 = "Customer No:" . $stdnokeep;
//$message3 = "Flicks Reference No:" . $flktransref;
$message4 = "Transaction Reference No:  " . $transref;
$message5 = "Transaction Date: " . $datetime ;
$message6 = "Transaction Amount: " . "=N=" . $amountkeep ;
$message7 = "Payment Method: " . "INTERSWITCH CARD" ;
$message8 = "Transaction Type: " .  $paymenttype ;
$message9 = "Payment Status: " .  $transstatus ;
$message10 = "Payment Description: " .  $response_desc ;

$message11 = "If you have any problem with your payment, please contact us through the following channels:";
$message12 = "- Send a mail to icttech@oyshct.edu.ng";
$message13 = "- Send a message to 08066701280, 07038899203 (Whatsapp only)
";
$message14 = "Our contact address is: Beside Fan Milk, Eleyele, Ibadan, Oyo State, Nigeria.";
//$message15 = "You are receiving this email from Oyo State College of Health Science and Technology as a user who made a payment transaction. ";
$message15 = "Yours Faithfully";
//--------build message-------------------------
	$message = '<html><head><style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style></head><body>';
			$message .= '<img src="http://oyschst.edu.ng/testmail/images/oyschstlogo.png" alt="OYSCHST" />';
			$message .= "<br><br>";
			$message .= '<table rules="all" style="border-color: #fff;" cellpadding="10">';
			$message .= "<tr><td bgcolor='#000000'><span class='style1'>". strip_tags($message1) ."<br><br>". strip_tags($message2) ."<br><br>". strip_tags($message16) ."<br><br>". strip_tags($message4) ."<br><br>". strip_tags($message5) ."<br><br>". strip_tags($message6) ."<br><br>". strip_tags($message7) ."<br><br>". strip_tags($message8) ."<br><br>" . strip_tags($message9) ."<br><br>" . strip_tags($message10)."<br><br>" . strip_tags($message11)."<br><br>" . strip_tags($message12)."<br><br>" . strip_tags($message13)."<br><br>" . strip_tags($message14)."<br><br>" . strip_tags($message15). " </span></td></tr>";
				$message .= "</table>";
				$message .= "<br><br>";
				$message .= '<img src="http://oyschst.edu.ng/testmail/images/paycards.jpg" alt="OYSCHST" />';
				$message .= "<br><br>";
				$message .= "© 2022 OYSCHST. All rights reserved.";
				$message .= "<br><br>";
				$message .= "OYSCHST | Beside Fan Milk, Eleyele, Ibadan, Oyo State, Nigeria." ;
			$message .= "</body></html>";
			

//=======
  
$mail = new PHPMailer(true);
  
//try {

$mail->SMTPDebug = 0;                   // Enable verbose debug output
$mail->isSMTP();                        // Set mailer to use SMTP
$mail->Host       = 'mail.oyschst.edu.ng';    // Specify main SMTP server
$mail->SMTPAuth   = true;               // Enable SMTP authentication
$mail->SMTPSecure = 'ssl';  
$mail->Port       = 465; 
$mail->Username   = 'no-reply@oyschst.edu.ng';     // SMTP username
$mail->Password   = 'noreply@2022';         // SMTP password
            // Enable TLS encryption, 'ssl' also accepted
               // TCP port to connect to
//=====

  
    $mail->setFrom('no-reply@oyschst.edu.ng', 'OYSCHST PAYMENT');           
    $mail->addAddress($emailaddykeep);
    //$mail->addAddress('allpayment@oyschst.edu.ng');
   // $mail->addAddress('miracle.kingsbranding@gmail.com');
       
    $mail->isHTML(true);                                  
    $mail->Subject = 'E-payment Notification';
    $mail->Body    = $message;
    $mail->AltBody = 'Body in plain text for non-HTML mail clients';
    $mail->send();
    echo "<script>
alert('Payment transaction details has been sent to your registered email address, check for more information.');
window.location.href='../regfail.php';
</script>";
// } catch (Exception $e) {
//     echo "<script>
// alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
// window.location.href='https://oyschst.edu.ng';
// </script>";
    
// }
?>

