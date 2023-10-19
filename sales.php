<?php
	include 'includes/session.php';

	if(isset($_GET['pay'])){
		$payid = $_GET['pay'];
		$date = date('Y-m-d');

		//----billing information-------
		$countryname=  $_POST['countryname'];
		$firstname= $_POST['firstname'];
		$lastname= $_POST['lastname'];
		$email=$_POST['email'];
		$mobileno=$_POST['mobileno'];
		$address=$_POST['address'];

		$state= $_POST['state'];
		$city= $_POST['city'];
		$zipcode= $_POST['zipcode'];
		$ordernote= $_POST['ordernote'];
		$payment_option = $_POST['payment_option'];

		$_SESSION['state']= $state;
		$_SESSION['city']= $city;
		$_SESSION['zipcode']=$zipcode;
		$_SESSION['ordernote'] = $ordernote;
		$_SESSION['payment_option'] = $payment_option;
		$_SESSION['payname'] = $firstname . " " . $lastname;
		$_SESSION['email'] = $email;
		$_SESSION['mobileno'] = $mobileno;

		if ($countryname == "--- Select Country ---"){
			echo "<script>
alert('Select your country.');
window.location.href='checkout';
</script>";
		}
		elseif ($payment_option == "--- Select Payment Option ---"){
			echo "<script>
alert('Select the payment option.');
window.location.href='checkout';
</script>";
		}
		else{
			goto h;
		}
exit;

h:
 
		$conn = $pdo->open();

		try{

			//-----insert into billing-------
			$stmt = $conn->prepare("INSERT INTO billing (userid,countryname,firstname,lastname,email,mobileno,address,state,city,zipcode,ordernote,payoption,payid,datekeep) VALUES (:userid,:countryname, :firstname, :lastname,:email,:mobileno,:address,:state,:city,:zipcode,:ordernote,:payoption,:payid,:datekeep)");
			$stmt->execute(['userid'=>$user['id'], 'countryname'=>$countryname, 'firstname'=>$firstname, 'lastname'=>$lastname,'email'=>$email,'mobileno'=>$mobileno,'address'=>$address,'state'=>$state,'city'=>$city,'zipcode'=>$zipcode,'ordernote'=>$ordernote,'payoption'=>$payment_option,'payid'=>$payid,'datekeep'=>$date]);
			//----insert into sales-----
			$stmt1 = $conn->prepare("INSERT INTO sales (user_id, pay_id, sales_date,payment_option) VALUES (:user_id, :pay_id, :sales_date,:payment_option)");
			$stmt1->execute(['user_id'=>$user['id'], 'pay_id'=>$payid, 'sales_date'=>$date, 'payment_option'=>$payment_option]);
			$salesid = $conn->lastInsertId();
			
			try{
				$stmt = $conn->prepare("SELECT * FROM cart LEFT JOIN products ON products.id=cart.product_id WHERE user_id=:user_id");
				$stmt->execute(['user_id'=>$user['id']]);

				foreach($stmt as $row){
					$stmt = $conn->prepare("INSERT INTO details (sales_id, product_id,quantity) VALUES (:sales_id, :product_id,:quantity)");
					$stmt->execute(['sales_id'=>$salesid, 'product_id'=>$row['product_id'], 'quantity'=>$row['quantity']]);
				}

				$stmt = $conn->prepare("DELETE FROM cart WHERE user_id=:user_id");
				$stmt->execute(['user_id'=>$user['id']]);

				$_SESSION['success'] = 'Transaction successful. Thank you.';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	
	header('location: sendmail/ordermail');
	
?>