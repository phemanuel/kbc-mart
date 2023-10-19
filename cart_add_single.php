<?php
	include 'includes/session.php';	
include 'dbconfig1.php';
	
	$id = $_GET['id'];
	$quantity = 1;
	//-----------
// 	$sql="SELECT * FROM products WHERE id='$id'";
// $result=mysqli_query($conn1,$sql);
// // Mysql_num_row is counting table row
// $count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
//if($count==1){
// while($rowval = mysqli_fetch_array($result))
//  {
//    $product_name= $rowval['name'];
//    $product_category = $rowval['category_name'];
//    $product_price = $rowval['price'];

// }
// 	$price_total= ($product_price * $quantity);
//}
$conn = $pdo->open();

	$output = array('error'=>false);

	if(isset($_SESSION['user'])){
		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM cart WHERE user_id=:user_id AND product_id=:product_id");
		$stmt->execute(['user_id'=>$user['id'], 'product_id'=>$id]);
		$row = $stmt->fetch();
		if($row['numrows'] < 1){
			try{
				$stmt = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
				$stmt->execute(['user_id'=>$user['id'], 'product_id'=>$id, 'quantity'=>$quantity]);
				$output['message'] = 'Item added to cart';
			}
			catch(PDOException $e){
				$output['error'] = true;
				$output['message'] = $e->getMessage();
			}
		}
		else{
			$output['error'] = true;
			$output['message'] = 'Product already in cart';
		}
	}
	else{
		if(!isset($_SESSION['cart'])){
			$_SESSION['cart'] = array();
		}

		$exist = array();

		foreach($_SESSION['cart'] as $row){
			array_push($exist, $row['productid']);
		}

		if(in_array($id, $exist)){
			$output['error'] = true;
			$output['message'] = 'Product already in cart';
		}
		else{
			$data['productid'] = $id;
			$data['quantity'] = $quantity;

			if(array_push($_SESSION['cart'], $data)){
				$output['message'] = 'Item added to cart';
				$_SESSION['message'] = 'Item added to cart';
			}
			else{
				$output['error'] = true;
				$output['message'] = 'Cannot add item to cart';
				$_SESSION['message'] = 'Cannot add item to cart';
			}
		}

	}

	$pdo->close();
	header('location: index');
	//echo json_encode($output);

?>