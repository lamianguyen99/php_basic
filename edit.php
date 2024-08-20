<?php
include_once('config.php');

$id = $_GET['id'];
$name = $_GET['name'];
$email = $_GET['email'];
$pass = $_GET['password'];

echo $id . " " . $name . " " . $email . " " . $pass;
?>

<html>
<head>
<title>EDIT PAGE</title>
</head>

<body>
	<a href="index.php">GO TO HOME PAGE</a>
	<form action="edit.php" method="post" >
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

<?php
//Check if form submited, insert form data into users table.
if(isset($_POST['Submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	//include database connection file
	include_once("config.php");
	//perform Query 
	$sql = "select name from user_x_e_s where name = '$name';"; 
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
		echo "có rồi";
	}
	else {
		echo "chưa có";
		$sql = "insert into user_x_e_s (name, email, password) values ('$name','$email','$pass');";
		$conn->query($sql);
		echo "addd success";
	}

}
?>
</body>
</html>

