<?php

include 'includes/session.php'; 
include 'dbconfig1.php'; 

$id = $_GET['id'];
if(isset($_SESSION['user'])){
               goto a;
                }
                else{
                 echo "<script>
                alert ('You need to login to add item to wishlist.');
                window.location.href='login';
                </script>";
                }
exit;                

a:
  $datekeep= date('Y-m-d');
  //----check if item has been added to wishlist for today====
   $sql="SELECT * FROM wishlist WHERE product_id='$id' and datekeep='$datekeep' ";
$result=mysqli_query($conn1,$sql);
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

if ($count==1){

    echo "<script>
                alert ('Item has already been added to wishlist.');
                window.location.href='index';
                </script>"; 
}
else {
    goto b;
}

exit;

b:
                        //-----------
    $sql1="SELECT * FROM products WHERE id='$id'";
$result1=mysqli_query($conn1,$sql1);
// Mysql_num_row is counting table row
$count1=mysqli_num_rows($result1);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count1==1){
while($rowval = mysqli_fetch_array($result1))
 {
   $product_name= $rowval['name'];
   $product_category = $rowval['category_name'];
   $product_price = $rowval['price'];
   $product_photo = $rowval['photo'];
    $slug = $rowval['slug'];

}
    $userid=$_SESSION['user'];
  

}
                    
//=======insert to wishlist====
$sql="INSERT INTO wishlist (user_id,product_id,product_name,product_category,product_price,datekeep,product_photo,slug)
VALUES
('$userid','$id','$product_name','$product_category','$product_price','$datekeep','$product_photo','$slug')";
if (!mysqli_query($conn1,$sql))
{
die('error:' . mysqli_error());
}

echo "<script>
                alert ('Item added to wishlist.');
                window.location.href='index';
                </script>";

?>