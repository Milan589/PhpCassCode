<?php
// 	echo "Hello ";
// 	$str = "Welcome to web class.";
// 	echo strrev($str);

// 	$x=20;
// 	echo "<br>value before using add assignment operator is $x";
// 	$x+=30;
// 	echo " <br>value is $x";
// $x=20;
// $y=30;

// var_dump($x==$y);


//pre-increment
// $x = 10;
// echo ++$x;
// echo $x;

// //post-increment
// $x= 10;
// echo $x++;
// echo $x;

//post-decrement
// $x= 10;
// echo $x--;
// echo $x;

//operators xor
// $x=20;
// $y=30;
// if($x <20 xor $y>=30){
// 	echo "conditional true";
// }

// //operators and
// $x=20;
// $y=30;
// if($x <20 && $y>=30){
// 	echo "conditional true";
// }

//operators or
// $x=20;
// $y=30;
// if($x <20 || $y>=30){
// 	echo "conditional true";
// }


//concatenation string


// $s= "hello";
// $y = "class";
// $s.=$y;
// echo $s;

//conditional statement

// $x= 20;
// $y= 30;
// if($x==$y){
// 	echo "value is same";
// }
// elseif($x!=30){
// 	echo "inside the block";
// }
// else{
// 	echo "different";
// }


///program to find greatest number among three


// $x=20;
// $y=30;
// $z=40;
 
//  if($x > $y && $x > $z){
//  	echo "$x is greatest";
//  }
//  elseif($y > $z && $y > $x){
//  	echo "$y is greatest";
//  }
//  else
//  {
//  	echo "$z is greatest";
//  }



//switch case


// $today=Date("D");
// // echo $today;
// switch($today){
// 	case "Mon":
// 	echo "Today is Monday.";
// 	break;
// 	case "Tue":
// 	echo "Today is Tuesday.";
// 	break;
// 	case "Wed":
// 	echo "Today is Wednesday.";
// 	break;
// 	case "Thu":
// 	echo "Today is Thursday.";
// 	break;
// 	case "Fri":
// 	echo "Today is Friday.";
// 	break;
// 	case "Sat":
// 	echo "Today is Saturday.";
// 	break;
// 	case "Sun":
// 	echo "Today is Sunday.";
// 	break;
// 	default:
// 	echo "No information";
// }


//Ternary Operator(?)

// $age= 18;
// if($age < 18){
// 	echo "Child";
// }
// else{
// 	echo "Adult";
// }

//PHP array induced array

// $colors =array("red", "green","blue");

// for($i =0; $i<=2; $i++){
// 	echo $colors[$i]. "<br>";
// }

//php arrary associative

// $age = array("Peter =>20","Harry =>30", "John=>40");
// foreach($age as $key_arr => $val_arr)
// echo $key_arr."=".$val_arr."<br>";


//Multidimensional array 
$contact = array(
	array(
		"name" => "Milan",
		"email" => "milanchaudhary589@gmail.com",
		),
	array(
		"name" => "Aashish",
		"email" => "pokharelaashish@gmail.com",
		)
);

echo "Name = ".$contact[0]["name"]. "<br>". "Email = ".$contact[0]["email"];



?>