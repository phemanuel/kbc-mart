<?php
include('dbconfig.php') ;

$useremail = $_SESSION['user_email'] ;
$email_addy= $_SESSION['user_email'] ;

$sql="SELECT * FROM training WHERE user_email='$useremail'";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
while($rowval = mysqli_fetch_array($result))
 {

$last_name = $rowval['last_name'];
$first_name = $rowval['first_name'];
$mobile_no = $rowval['phone_no'];

$_SESSION['last_name'] = $rowval['last_name'];
$_SESSION['first_name'] = $rowval['first_name'];
$_SESSION['mobile_no'] = $rowval['phone_no'];

//$picnamekeep= $rowval['picturename'];


}
}
//=================================
$course_name = $_SESSION['course_name'] ;
$course_code = $_SESSION['course_code'] ;
$amount = $_SESSION['amount'] ;
$transfee = "325";
$total_amount = $amount + $transfee ;
$full_name = $last_name . " " . $first_name ;
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

//------------------------
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kings Branding Consult :: Payment</title>
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
.style9 {
	font-size: 14px;
	color: #000000;
	font-weight: bold;
}
.style23 {color: #000000; font-size: 13px; }
.style25 {
	font-size: 15px;
	color: #000000;
	font-weight: bold;
}
-->
    </style>
</head>
<body>

    <div class="main">

        <div class="container">
            <form id="paymentForm" method="post" class="appointment-form">
            <table width="100%" border="0">
                                 
            <tr>
              <td colspan="2"><div align="center"><img src="images/logo.png" width="294" height="73"></div></td>
              </tr>
               <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>  
               <tr>
              <td width="49%"><span class="style23">Payee Name</span></td>
              <td width="51%"><span class="style23"><?php echo $full_name;?></span></td>
            </tr>
             <tr>
              <td width="49%"><span class="style23">Course</span></td>
              <td width="51%"><span class="style23"><?php echo $course_name ;?></span></td>
            </tr>
            <tr>
              <td width="49%"><span class="style23">Email Address</span></td>
              <td width="51%"><span class="style23"><?php echo $email_addy ;?></span></td>
            </tr>
             <tr>
              <td width="49%"><span class="style23">Mobile No</span></td>
              <td width="51%"><span class="style23"><?php echo $mobile_no ;?></span></td>
            </tr>
             <tr>
              <td width="49%"></td>
              <td width="51%"><span class="style8"></span></td>
            </tr>
            <tr>
              <td colspan="2"><u><span class="style25">Payment Summary</span></u></td>
              </tr>
            <tr>
              <td><span class="style23"><?php echo $course_code . " FEE" ?></span></td>
              <td> <span class="style23"><img src="images/plus.png"> <?php echo number_format($amount,2) ;?></span></td>
            </tr>
            <tr>
              <td><span class="style23">Transaction Fee</span></td>
              <td><span class="style23"><img src="images/plus.png"> <?php echo number_format($transfee,2) ;?></span></td>
            </tr>
            <tr>
              <td><span class="style23">Total Fee</span></td>
              <td><span class="style23"><img src="images/plus.png"> <?php echo number_format($total_amount,2) ;?></span></td>
            </tr>
            <tr>
              <td><span class="style1"></span></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2"><span class="style9">
              <?php  echo $amountword ." naira only .";  ?></span></td>
              </tr>
               <tr>
              <td>&nbsp;<input name="email_addy" id="email_addy"  type="hidden" value="<?php echo $email_addy;?>" />
                      <input name="total_amount" id="total_amount" type="hidden" value="<?php echo $total_amount;?>" /></td>
              <td>&nbsp;</td>
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

      ref: 'KBCLMS'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
     
      callback: function(response){
       var reference = response.reference;
      alert('Payment complete! Reference: ' + reference)
       window.location = "verify_transaction.php?reference=" + response.reference;
      },
      onClose: function(){
          alert('Transaction Cancelled.');
          window.location = "index.php?transaction=cancel" ;
      }
    });
    handler.openIframe();
  }
</script>