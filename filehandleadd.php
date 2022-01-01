<?php 
	$file="data.txt";
	$data ="Hello Guys! How are you?";
	
		$handle= fopen($file, "w") ;
		fwrite($handle,$data);
		fclose($handle);
		echo "Data written to the file successfully";
?>