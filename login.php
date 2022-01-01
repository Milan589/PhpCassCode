<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<?php 
		$errFirstname = $errLastname = $errEmail = '';

		if(isset($_POST['submit'])){
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];

			if(empty($firstname) && empty($lastname) && empty($email)){
				$errFirstname = "firstname shuldnot be empty";
				$errLastname = "firstname shuldnot be empty";
				$errEmail = "firstname shuldnot be empty";
			}
			else{
				$conn = mysqli_connect('localhost','root','','myDB');
				if(!$conn){
					die("connection failed: ".mysqli_connect_errorno());
				}
				$sql="INSERT INTO MyGuests(firstname, lastname,email)
				values('$firstname','$lastname','$email')";
			}
		}

	?>
	<form name="csit" method="post" action="">
		<label>First Name: </label>
		<input type="text" name="firstname"><br>
		<label>Last Name: </label>
		<input type="text" name="lastname"><br>
		<label>Email: </label>
		<input type="email" name="email">	<br>
		<button type="submit" value="submit" name="submit">Submit</button>	
		
	</form>

</body>
</html>