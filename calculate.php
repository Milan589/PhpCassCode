<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculate</title>
</head>
<body>
	<form action="<?PHP echo $_SERVER["PHP_SELF"];?> " method="POST">
		<label>First number :</label>
		<input type="number" name="fnum"><br>
		<label>Second number: </label>
		<input type="number" name="snum"><br>
		<input type="radio" name="r"value="add">ADD &nbsp; &nbsp;
		<input type="radio" name="r"value="sub">SUB &nbsp; &nbsp;
		<input type="radio" name="r"value="mul">Multiply&nbsp; &nbsp;
		<input type="radio" name="r"value="div">Divide &nbsp; &nbsp;
		<button type="submit" name="submit" value="submit">Submit</button>

	 </form>

	 <?php 
	 	if($_SERVER['REQUEST_METHOD']=="POST")
	 	{
	 		$n1 = $_POST['fnum'];
	 		$n2 = $_POST['snum'];
	 		$calc = $_POST['r'];
	 		if(is_numeric($n1) && is_numeric($n2))
	 		{
	 			if($calc != NULL){
	 				switch($calc){
	 					case "add":
	 					$result = $n1+$n2;
	 					break;
	 					case"sub":
	 					$result = $n1-$n2;
	 					break;
	 					case"mul":
	 					$result = $n1*$n2;
	 					break;
	 					case"div":
	 					$result = $n1/$n2;
	 					break;
	 					default:
	 					$result="Invalid Calculation";
	 					break;

	 				}
	 				echo "The result is ".$result;
	 			}
	 		}
	 	}
	 ?>

</body>
</html>