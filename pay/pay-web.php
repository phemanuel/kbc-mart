<?php
session_start();
include('dbconfig.php') ;

$payment_option = $_SESSION['payment_option'];
   $payname =  $_SESSION['payname'] ;
   $email_addy =  $_SESSION['email'];
   $mobileno =  $_SESSION['mobileno'];
   $amount = $_SESSION['price_total'];
   $transfee = "325";
$total_amount = $amount + $transfee ;
$pay_id = $_SESSION['pay_id'];

//$amount = "100" ; 
//======amount to words==============
//=============================================
class numbertowordconvertsconver {
    function convert_number($number) 
    {
        if (($number < 0) || ($number > 999999999)) 
        {
            throw new Exception("Number is out of range");
        }
        $giga = floor($number / 1000000);
        // Millions (giga)
        $number -= $giga * 1000000;
        $kilo = floor($number / 1000);
        // Thousands (kilo)
        $number -= $kilo * 1000;
        $hecto = floor($number / 100);
        // Hundreds (hecto)
        $number -= $hecto * 100;
        $deca = floor($number / 10);
        // Tens (deca)
        $n = $number % 10;
        // Ones
        $result = "";
        if ($giga) 
        {
            $result .= $this->convert_number($giga) .  "Million";
        }
        if ($kilo) 
        {
            $result .= (empty($result) ? "" : " ") .$this->convert_number($kilo) . " Thousand";
        }
        if ($hecto) 
        {
            $result .= (empty($result) ? "" : " ") .$this->convert_number($hecto) . " Hundred";
        }
        $ones = array("", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine", "Ten", "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eightteen", "Nineteen");
        $tens = array("", "", "Twenty", "Thirty", "Fourty", "Fifty", "Sixty", "Seventy", "Eigthy", "Ninety");
        if ($deca || $n) {
            if (!empty($result)) 
            {
                $result .= " and ";
            }
            if ($deca < 2) 
            {
                $result .= $ones[$deca * 10 + $n];
            } else {
                $result .= $tens[$deca];
                if ($n) 
                {
                    $result .= "-" . $ones[$n];
                }
            }
        }
        if (empty($result)) 
        {
            $result = "zero";
        }
        return $result;
    }
}



$class_obj = new numbertowordconvertsconver();
$amountword = $class_obj->convert_number($total_amount);

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
</script>
<!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
<!--
.style1 {color: #000000}
.style8 {font-size: 16px}
.style23 {color: #000000; font-size: 13px; }
.style25 {
	font-size: 16px;
	color: #000000;
	font-weight: bold;
	font-family: Calibri;
}
-->
    </style>

    <style>
body {
  background-image: url('images/body-bg3.jpg');
}
    .style26 {font-family: Calibri}
.style28 {font-size: 14px}
    .style29 {font-family: Calibri; font-size: 14px; }
    </style>
</head>
<body>

    <div class="main">

        <div class="container" style="margin-left: auto; margin-right: auto;">
            <form id="paymentForm" method="post" class="appointment-form">
            <table width="100%" border="0" cellpadding="4" cellspacing="4" >
                                 
            <tr>
              <td colspan="2"><div align="center"><img src="images/logo.png" width="294" height="73"></div></td>
              </tr>
               <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>  
            <tr>
              <td width="49%"><span class="style23 style28">Email Address :</span></td>
              <td width="51%"><span class="style23 style28"><?php echo $email_addy ;?></span></td>
            </tr>            
               <tr>
              <td width="49%"><span class="style23 style28">Payee Name :</span></td>
              <td width="51%"><span class="style23 style28"><?php echo $payname;?></span></td>
            </tr>
             
            <tr>
              <td width="49%"><span class="style23 style28">Mobile No :</span></td>
              <td width="51%"><span class="style23 style28"><?php echo $mobileno ;?></span></td>
            </tr>
             <tr>
              <td width="49%"><span class="style23 style28">Payment Option :</span></td>
              <td width="51%"><span class="style23 style28"><?php echo $payment_option ;?></span></td>
            </tr>
             <tr>
              <td width="49%"></td>
              <td width="51%"><span class="style8"></span></td>
            </tr>
            <tr>
              <td colspan="2"><u><span class="style25">Payment Summary</span></u></td>
              </tr>
              <tr>
              <td width="49%"><span class="style23 style26 style28">Transaction Reference :</span></td>
              <td width="51%"><span class="style23 style26 style28"><?php echo $pay_id?></span></td>
            </tr>
            <tr>
              <td><span class="style23 style26 style28">Total amount due :</span></td>
              <td> <span class="style23 style26 style28"><img src="images/plus.png"> <?php echo number_format($amount,2) ;?></span></td>
            </tr>
            <tr>
              <td><span class="style23 style26 style28">Transaction Fee :</span></td>
              <td><span class="style23 style26 style28"><img src="images/plus.png"> <?php echo number_format($transfee,2) ;?></span></td>
            </tr>
            <tr>
              <td><span class="style23 style26 style28">Total Fee :</span></td>
              <td><span class="style23 style26 style28"><img src="images/plus.png"> <?php echo number_format($total_amount,2) ;?></span></td>
            </tr>
                           <tr>
              <td colspan="2">&nbsp;<input name="email_addy" id="email_addy"  type="hidden" value="<?php echo $email_addy;?>" />
                      <input name="total_amount" id="total_amount" type="hidden" value="<?php echo $total_amount;?>" /></td>
              </tr>
                           <tr>
                             <td>&nbsp;</td>
                             <td>&nbsp;</td>
                           </tr>
                           <tr>
                             <td colspan="2"><p class="style29"><span class="style1">Note: Please take note of the <strong> Transaction Reference Number</strong>, and you can print the </span><a href="#" onClick="window.print()"><strong><u>Payment Summary page</u></strong></strong></a></td>
                           </tr>
                           <tr>
                             <td colspan="2"><span class="style1 style26 style28">If you have any problem with your payment, please contact us through the following channels:<br>
- Send a mail to easyshop@kingsconsult.com.ng</span><br>
<a href="https://wa.me/09023755645""><img src="images/WhatsAppButtonGreenSmall.png" width="169" height="34"></a></td>
                           </tr>
                </table>
                
              <div class="form-group-1">
                  
        </div>        
                <p>&nbsp;</p>
  <div class="form-submit">
    <script src="https://js.paystack.co/v1/inline.js"></script>
                    <input type="button" onClick="payWithPaystack()" class="submit" value="Pay Now"  />
                    
                </div>
                <div class="form-submit">
                  <div align="center">
                    <p>&nbsp;                      </p>
                    <p>
                      
                      <img src="images/debit card.png" width="182" height="36"></p>
                  </div>
              </div>
          </form>
      </div>

    </div>

    <!-- JS -->
    
    
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<script>
const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
  function payWithPaystack(){
    var handler = PaystackPop.setup({
      key: 'pk_live_af75db5adac1cb07ba98e7e4d0d7d23adef8d6a6',
      email: document.getElementById("email_addy").value,
    amount: document.getElementById("total_amount").value * 100,

      ref: 'KBCMART'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
     
      callback: function(response){
       var reference = response.reference;
      alert('Payment complete! Reference: ' + reference)
       window.location = "verify_transaction?reference=" + response.reference;
      },
      onClose: function(){
          alert('Transaction Cancelled.');
          window.location = "pay-web?transaction=cancel" ;
      }
    });
    handler.openIframe();
  }
</script>