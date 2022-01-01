<?php 
	$file="data.txt";
	
		$handle= fopen($file, "w") or die("ERROR: cannot open file.");
		if($handle){
			echo "File write successfully.";
			fclose($handle);
		}	
?>