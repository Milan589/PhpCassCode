<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Validation</title>
</head>
<body>
	<?php 
	$errName = $errAddress = $errEmail = $errPhone= $errWeb = $errGender= '';
	$name = $address = $email = $phone = $web = $gender= "";

	if(isset($_POST['submit']))
	{
		
		$name =$_POST['username'];
		$address =$_POST['address'];
		$email =$_POST['email'];
		$phone =$_POST['phn'];
		$web =$_POST['web'];
		$gender =$_POST['gender'];



		if(empty($name)){
			// echo "Name is blank"."br";
			$errName = " Name is blank"."<br>";
		}
		if(empty($address)) {
			$errAddress = "Address is blank"."<br>";
		}

	if(empty($email)){
		// echo "Email  is empty"."<br>";
		$errEmail ="Email is blank"."<br>";
	}
	if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		$errEmail ="Email is not in proper format"."<br>";
	}
	if(empty($phone)) {
		$errPhone ="Phone is blank"."<br>";
	}
	 elseif(is_numeric($phone)&& strlen($phone)!=10){
		$errPhone = "enter valid 10 digit number"."<br>";
	}
	if(empty($web)){
		$errWeb= "Web is blank"."<br>";
	}
	else if(!filter_var($web, FILTER_VALIDATE_URL)){
		$errWeb= "web is not proper format"."<br>";
	}
	 if (empty($_POST["gender"])) {
    $errGender = "Gender is required";
  
  }
	
}
?>
	<form action="<?php echo $_SERVER['PHP_SELF'] ;?> " method="post">
	 <label>Name:</label>
		<input type="text" name="username" id="username" value="<?php echo $name ;?>"> <br>
		<span class="error"><?php echo $errName; ?></span><br> 
		<label>Address:</label>
		<input type="text" name="address" id="address" value="<?php echo $address ;?>"> <br>
		 <span class="error"><?php echo $errAddress; ?></span><br>
		 <label>Email:</label> 
		<input type="email" name="email" id="email" value="<?php echo $email; ?>" > <br>
		<span class="error"><?php echo $errEmail; ?></span><br>
		 <label>Phone:</label>
		<input type="number" name="phn" id="phone" value="<?php echo $phone; ?> "> <br>
		 <span class="error"><?php echo $errPhone; ?></span><br>
		  <label>Web:</label>
		<input type="text" name="web" id="web" value="<?php echo $web; ?>" > <br>
		 <span class="error"><?php echo $errWeb; ?></span><br>
		 <label>Gender</label>
		 <input type="radio" name="gender" id="gender" value="<?php echo $gender; ?>">Male
		 <input type="radio" name="gender" id="gender" value="<?php echo $gender; ?>">Female
		 <input type="radio" name="gender" id="gender" value="<?php echo $gender; ?>">Other <br>
		 <span class="error"> <?php echo $errGender;?></span><br><br>

		<button type="submit" name="submit" class="button">Login </button>

	</form>



</body>
</html>


