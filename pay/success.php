<?php
session_start();
$status= $_SESSION['status'] ;
 $reference = $_SESSION['reference'] ;
$cus_amount = $_SESSION['cus_amount'] ;
$cus_email = $_SESSION['cus_email'] ;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KBC Supermart :: Payment</title>
<script type="text/javascript">
function reload()
{
img = document.getElementById("capt");
img.src="captcha-image-adv.php?rand_number=" + Math.random();
}
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
</script>
<!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
<!--
.style1 {color: #000000}
.style7 {color: #FF0000}
.style8 {font-size: 16px}
.style16 {
	color: #006600;
	font-size: 14px;
}
-->
    </style>
     <style>
body {
  background-image: url('images/body-bg3.jpg');
}
     </style>
</head>
<body>

    <div class="main">

        <div class="container">
            <form id="paymentForm" method="post" class="appointment-form">
            <table width="100%" border="0">
                  <tr>
                    <td><div align="center"><img src="images/logo.png" width="294" height="73"></div></td>
                  </tr>
                </table>
                <h2 align="center" class="style8"><br>
                  <em>ORDER PAYMENT</em></h2>
              <p align="left" class="style7">&nbsp;</p>
              <br>
              <div class="form-group-1">
          
 <p class="style1"><span class="style7"><strong><span class="style16">Your payment was successful</span> </strong></span></p>
 <p class="style1">Your order is been processed and will be delivered within the stipulated time.</p>
 <p>Transaction Email: <?php echo $cus_email; ?></p>
 <p>Transaction Reference: <?php echo $reference; ?></p>
 <p>Transaction Status: <?php echo $status; ?></p>
 <p class="style1"><em>Thank you for shopping with KBC Supermart.</em></p>
 <p class="style1"><span class="style1 style26 style28">If you have any problem with your payment or delivery, please contact us through the following channels:<br>
- Send a mail to kbcsupermart@kingsconsult.com.ng</span><br>
<a href="https://wa.me/09023755645""><img src="images/WhatsAppButtonGreenSmall.png" width="169" height="34"></a></p>
              </div>        
              <p>&nbsp;</p>
  <div class="form-submit">
   
                    <input type="button"  class="submit" onClick="MM_goToURL('parent','https://kbcmart.kingsconsult.com.ng');return document.MM_returnValue" value="Finish"  />
  </div>
                </form>
      </div>

    </div>

    <!-- JS -->
    
    
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
