<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'] ;?> " method="post">
	 <label>Username:</label>
		<input type="text" name="username" id="username" size="20"> <br>
		 <label>Password:</label>
		<input type="password" name="password" id="password" >
		<button type="submit" name="submit" class="button">Login </button>

	</form>
	<?php 
	if(isset($_POST['submit'])){
	echo $_POST['username'];
	}
	?>
	
</body>
</html>