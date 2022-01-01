<?php
	$conn=mysqli_connect('localhost','root','','myDB');
	$sql= "SELECT * FROM MyGuests ";
	$res = mysqli_query($conn,$sql);

	$data=[];
	if(mysqli_num_rows($res)> 0){
		while($row = mysqli_fetch_assoc($res)){
			array_unshift($data,$row);
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<table>
		<thead>
			<th>S.N</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
		</thead>
		<?php 
		$i=1;
		foreach($data as $d){
			?>
			<tbody>
				<tr>
					<td><?php echo $i++ ;?>> </td>
					<td><?php echo $d['firstname'] ;?> </td>
					<td><?php echo $d['lastname'] ;?> </td>
					<td><?php echo $d['email'] ;?> </td>
					<td><a href="editform.php?id=<?php echo $d['id'] ?> ">edit</a></td>
					<td><a href="deleteform.php?id=<?php echo $d['id'] ?> ">Delete</a></td>
				</tr>
			</tbody>
			<?php } ?>
	</table>

</body>
</html>