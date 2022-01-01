<?php
	$file ="data.txt";
	if(file_exists($file)){
		if(rename($file, "data1.txt")) {
			echo "File renamed successfully.";
		}
		else
		{
			echo "Error: File cannot be renamed";
		}
	}
		else{
			echo "Error: file doesnot exist";
	
	} 
?>