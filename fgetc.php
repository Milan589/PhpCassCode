<?php
	$file = fopen("data.txt","r");
	while(!feof($file))
	{
		echo fgetc($file). "<br>";
	} 
	fclose($file);
?>