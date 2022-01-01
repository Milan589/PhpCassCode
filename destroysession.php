<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
	session_unset();
	session_destroy();
echo "All session variable are now  removed and the session is destroyed"
?>
</body>
</html>