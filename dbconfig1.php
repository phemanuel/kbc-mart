 <?php
 $servername = "localhost";
$username = "root";
$password = "root1987";
$dbname = "kbcmart";

// Create connection
$conn1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn1->connect_error) {
     die("Connection failed: " . $conn1->connect_error);
}
 ?>
