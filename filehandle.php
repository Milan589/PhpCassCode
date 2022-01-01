<?php 
	$file="data.txt";
	if(file_exists($file)){
		echo "The file $file exists. "."<br>";
		$handle= fopen($file, "r") or die("ERROR: cannot open file.");
		if($handle){
			echo "File opened successfully.";
			fclose($handle);
		}
	}
		else{
			echo "Error: The file $file doesnot exist.";
		}
	
?>