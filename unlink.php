<?php
	$file ="data1.txt";
	if(file_exists($file)){
		if(unlink($file)) {
			echo "File removed successfully.";
		}
		else
		{
			echo "Error: File cannot be removed";
		}
	}
		else{
			echo "Error: file doesnot exist";
	
	} 
?>