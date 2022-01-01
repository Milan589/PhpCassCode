<?php
$servername ="localhost";
$username = "root";
$password ="";
$dbname ="myDB";

//create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
//check connection
if(!$conn){
	die("connection failed:".mysqli_connect_error());
}
//create database
$sql="CREATE DATABASE myDB";
if(mysqli_query($conn,$sql)){
echo"Database created succesfully";
}else{
	echo "Error creating database:".mysqli_error($conn);
}
mysqli_close($conn);



// //create table 
// $sql = "CREATE TABLE MyGuests(
// 	id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// 	firstname VARCHR(30) NOT NULL,
// 	lastname VARCHAR(30),NOT NULL,
// 	email VARCHAR(20), NOT NULL,
// 	reg_date TIMESTAMP)";
// if(myqli_query($conn,$sql)){
// 	echo "Table MyGuest created successfully";
// }
// else{
// 	echo "error creating database:".mysqli_error($conn);
// }
// mysqli_close($conn);

?>


