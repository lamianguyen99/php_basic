<?php
// Create database connection ussing config file
include_once("config.php");

//Fetch all users data from database
$sql = "select * from user_x_e_s;";

$result = $conn->query($sql);

?>

<html>
<header>
<title>HOME PAGE</title>
</header>
<body>
<a href="add.php">ADD INFOR</a>
<br>

<table>
	<tr>
	<th> NAME</th> <th>EMAIL</th> <th>PASSWORD</th> <th>ACTION</th>
	</tr>
	<tr>
	<?php
	while ($rows = $result->fetch_assoc()){
		echo "<td>" . $rows['name'] . "</td>";
		echo "<td>" . $rows['email'] . "</td>";
		echo "<td>" . $rows['password'] . "</td>";
		echo "<td><a href='edit.php?id=$rows[id]'>EDIT</a></td> <td><a href='delete.php?id=$rows[id]'></a></td>";
	
	}
	?>

	</tr>
</table>
</body>
</html>
