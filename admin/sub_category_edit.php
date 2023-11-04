<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$cat_name = $_POST['cat_name'];
		$sub_cat_name = $_POST['sub_cat_name'];

		try{
			$stmt = $conn->prepare("UPDATE subcategory SET cat_name=:cat_name,sub_cat_name=:sub_cat_name WHERE id=:id");
			$stmt->execute(['cat_name'=>$cat_name,'sub_cat_name'=>$sub_cat_name, 'id'=>$id]);
			$_SESSION['success'] = 'Sub-Category updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit category form first';
	}

	header('location: sub_category');

?>