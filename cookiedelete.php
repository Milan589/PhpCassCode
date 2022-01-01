<?php 
$cookie_name ="user";
$cookie_value ="Manoj";
	setcookie($cookie_name,$cookie_value,time()-(1*24*60*60),"/","",0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Getting Cookie</title>
</head>
<body>
	<p>Cookie Information</p>
	<?php 
	if(!isset($_COOKIE['$cookie_name'])){
		echo "Cookie named".$cookie_name."is not set!";
	}
	else{
		echo "Cookie ".$cookie_name." is set! <br>";
		echo "Value is:".$_COOKIE[$cookie_name];
	}
	echo $_COOKIE['user'];

	?>

</body>
</html>