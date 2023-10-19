<?php

include 'includes/session.php'; 
include 'dbconfig1.php'; 

$itemid=$_GET['id'];
//==remove item from wish list=========
$sql = "DELETE FROM wishlist WHERE id='$itemid'";
$result=mysqli_query($conn1,$sql);

if (!mysqli_query($conn1,$sql))
{
die('error:' . mysqli_error());
}

echo "<script>
                alert ('Item removed from wishlist.');
                window.location.href='wishlist';
                </script>";
?>