<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Session</title>
</head>
<body>
	<?php
		$_SESSION["favcolor"]= "green";
		$_SESSION["favanimal"]= "cat";
		echo "Session variables are set";
	?>

</body>
</html>