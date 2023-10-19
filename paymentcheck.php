<?php
session_start();

$payment_option = $_SESSION['payment_option'];

if($payment_option== "Direct Bank Transfer"){

				echo "<script>
                window.location.href='pay/pay-bank';
                </script>";
}

elseif($payment_option== "Web Pay (Paystack)"){

				echo "<script>
                window.location.href='pay/pay-web';
                </script>";
}

?>