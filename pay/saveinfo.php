<?php
 include ('dbconfig.php'); 
//session_start();

//------participant details------
$emailaddy = $_SESSION['cus_email'] ;
$amount =  $_SESSION['cus_amount'];
$amount =  ($amount / 100) ;
$paystatus  = $_SESSION['status'];
$paystack_ref = $_SESSION['reference'] ;
$easy_ref = $_SESSION['pay_id'];
$mobile_no= $_SESSION['mobile_no'] ;
$payname = $_SESSION['payname'];
//========other
$date1= date('Y-m-d') ;
$time1 = date("h:i:sa") ;

//------check and save voter email-------------
$sql="SELECT * FROM training WHERE user_email='$emailaddy'";

			$result=mysqli_query($conn,$sql);
			$count=mysqli_num_rows($result);
if($count==1){

goto a;
}
else{
goto b;
}

exit;

a:

$sql1="INSERT INTO paytransaction (emailaddy,amount,paystatus,paystack_ref,easy_ref,mobileno,payname,datekeep,timekeep)
VALUES
('$emailaddy','$amount','$paystatus','$paystack_ref','$easy_ref','$mobile_no','$payname','$date1','$time1')";
if (!mysqli_query($conn,$sql1))
{
die('error:' . mysqli_error());
}
header("location: success");
exit;

b:

header("location: error");





?>