<?php
include_once('config.php');

$id = $_GET['id'];

$sql = "select * from user_x_e_s where id = $id;";
$kq = $conn->query($sql);
$result = $kq->fetch_assoc();
$name = $result['name'];
$email = $result['email'];
$pass = $result['password'];

?>

<html>
<head>
<title>EDIT PAGE</title>
</head>

<body>
	<a href="index.php">GO TO HOME PAGE</a>
	<form action="editAc.php" method="post" >
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name ?>"</td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email ?>"</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" value="<?php echo $pass ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $id ?>"></input></td>
			</tr>
			<tr>
				<td><input type="submit" name="Submit" value="OK"></td>
			</tr>
		</table>
	</form>

</body>
</html>

