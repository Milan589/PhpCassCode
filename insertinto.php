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
$sql ="INSERT INTO 	 MyGuests(firstname, lastname,email)
values('John','Doe','John@gmail.com')";
if(mysqli_query($conn,$sql)){
	echo "New record created successfully";
}
else{
	echo "error:".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>