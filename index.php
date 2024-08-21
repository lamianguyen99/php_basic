<?php

session_start();
if ($_SESSION['LOGGEDIN'] == 1){
	echo "<h1>SUCCESS LOGIN</h1>";
}
else{
        header("Location: login.php?message=" . $message . "");

}

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
<a href="add.php">ADD INFO</a>
<br>

<table>
	<tr>
	<th> NAME</th> <th>EMAIL</th> <th>PASSWORD</th> <th>ACTION</th>
	</tr>
	
	<?php
	while ($rows = $result->fetch_assoc()){
		echo "<tr>";
		echo "<td>" . $rows['name'] . "</td>";
		echo "<td>" . $rows['email'] . "</td>";
		echo "<td>" . $rows['password'] . "</td>";
		echo "<td><a href='edit.php?id=$rows[id]'>EDIT</a></td>"; 
		echo "<td><a href='delete.php?id=$rows[id] 'onclick=\"return confirm('are you sure?')\">DELETE</a></td>";
		echo "</tr>";
			
	}
	?>

	
</table>
</body>
</html>
