<?php
	if(isset($_POST['submit']))
{
	$data=$_POST['file'];
	$extension =$_POST['extension'];
	$content=$_POST['document'];
}
	$fp = fopen('file.txt', 'w');
		
		if(file_exists($data)){
		echo "The file $fp exists. "."<br>";
	}
	fwrite($fp, $data);
fclose($fp);
}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create file</title>
</head>
<body>
	<form action="" method="post">
		<label for="Createfile">Enter File Name:</label>
		<input type="text" name="file" value="filename"> <br>
		<!-- <label for="choose">Choose Extension: </label>
		<select name="extension">Select
		<option name="doct" value="">.docs</option>
		<option name="pdf" value="">.pdf</option>
		<option name="txt" value="">.txt</option>

		</select>
		<br>
		<label for="document">Describe your document: </label><br>
		<textarea name="document" rows="10" cols="20"> </textarea>
		<br> -->
		<button type="submit" value="submit">Submit</button>
	</form>
</body>
</html>