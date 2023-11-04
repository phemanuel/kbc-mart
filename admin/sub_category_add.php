
<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$name = $_POST['cat_name'];
		$name1 = $_POST['sub_cat_name'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM subcategory WHERE sub_cat_name=:name1");
		$stmt->execute(['name1'=>$name1]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Sub-Category already exist';
		}
		else{
			try{
				$stmt = $conn->prepare("INSERT INTO subcategory (cat_name,sub_cat_name,sub_cat_slug) VALUES (:name,:name1,:name2)");
				$stmt->execute(['name'=>$name,'name1'=>$name1,'name2'=>$name1]);
				$_SESSION['success'] = 'Sub-Category added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up sub-category form first';
	}

	header('location: sub_category');

?>