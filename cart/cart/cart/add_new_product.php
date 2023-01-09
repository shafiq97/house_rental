<?php 

include("connection.php");

if (isset($_POST['add'])) {
	
	$file = $_FILES['image']['name'];
	$name = $_POST['name'];
	$price = $_POST['price'];



	if (empty($file)  && empty($name) && empty($price)) {
		echo "fff";
	}else{
		$query = "INSERT INTO cart(name,price,image) VALUES('$name','$price','$file')";
		$res = mysqli_query($connect,$query);

		if ($res) {
		  move_uploaded_file($_FILES['image']['tmp_name'], "img/$file");

		  $name = "";
		  header("Location: index.php");
		}else{
			
		}
	}
}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Add New Property</title>
</head>
<body>

	<?php 
      include("header.php");
	 ?>


	 <div class="container">
	 	<div class="col-md-12 d-flex justify-content-center ">
	 	
	 			<div class="col-md-4 bg-warning mt-4">
	 				<h3 class="text-center text-white">Add New Property</h3>
	 				<form method="post" enctype="multipart/form-data">
	 					<label>Choose Property Image</label>
	 					<input type="file" name="image" class="form-control">
	 					<label>Property Name</label>
	 					<input type="text" name="name" class="form-control">
	 					<label>Property Price</label>
	 					<input type="number" name="price" class="form-control">
	 					<input type="submit" name="add" class="btn btn-info my-5" value="Add New Product">
	 				</form>
	 		</div>
	 	</div>
	 </div>

</body>
</html>