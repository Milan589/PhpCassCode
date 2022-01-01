<?php
$id = $_GET['id'];
$conn = mysqli_connect('localhost','root','','myDB');
	if (isset($_POST['submit'])) {
		$id=$_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email=$_POST['email'];
		
		$sql = "UPDATE MyGuests set firstname = '$firstname' , lastname = '$lastname',email='$email' where id = '$id'";
		mysqli_query($conn, $sql);
		
		if (mysqli_affected_rows($conn) == 1) {
	 	
	 	header('location:displayformatdata.php');
	 }
	 else{
	 	echo "Data update failed".mysqli_error($conn);
	 }
	}
	$sql1 = "select * from MyGuests where id = $id";
	// echo $sql1;
	$res = mysqli_query($conn, $sql1);
	$data = mysqli_fetch_assoc($res);
	//print_r($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert Data Into Form</title>
	<style type="text/css">
		.error{
			color: red;
			display: block;
		}
	</style>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
		<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
		<label>First Name</label>
		<input type="text" name="firstname" value="<?php echo $data['firstname']; ?>">
		<br>
		<br>
		<label>Last Name</label>
		<input type="password" name="lastname" value="<?php echo $data['lastname']; ?>">
		<br>
		<br>
		<label>Email</label>
		<input type="text" name="email" value="<?php echo $data['email']; ?>">
		<br>
		<br>
		<!-- <label>Image</label>
		<input type="file" name="image" value="<?php echo $data['image']; ?>"> -->
		
		<br>
		<br>
		<input type="submit" name="submit">
	</form>
</body>
</html>