<?php
$servername ="localhost";
$username = "root";
$password ="";
$dbname = "myDB";

//create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
//check connection
if(!$conn){
	die("connection failed:".mysqli_connect_error());
}
$sql = "UPDATE MyGuests SET lastname= 'abcd' WHERE id =2";
if(mysqli_query($conn,$sql)){
	echo "record updated successfully";
}
else{
	echo "Error updating recodr: ".mysqli_error($conn);
}
mysqli_close($conn);
?>