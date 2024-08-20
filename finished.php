<?php
session_start();
$servername = "localhost";
$username = "lara_user";
$password = "123456789";
$dbname = "laravel";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
$page = $_POST['registerform']; // Setting the page value
$user = $_POST['usrnme']; // Setting the user value
$pass = $_POST['pwd']; // Setting the pass value
//
var_dump($page);
var_dump($user);
var_dump($pass);


if($page == 1)
{
	//This means that the page is the register form so the register form code goes here
	$sql="select name from user_x_e_s where name = '$user';";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		echo "co usser";
	}
	else {
		echo "chua co user, insert duoc ";
		$sql2="insert into user_x_e_s (name, email,password) values ('$user','dddd','$pass')";
		if ($conn->query($sql2) === TRUE){
			echo "Dăng ky thanh cong vui lòng vào <a href='login.php'>Login Page</a>";
		}
		else{
			echo "Error instert to tables: " . $conn->error;
		}
	}
}
if($page == 0)
{
	//This means that the page is the login form so the register form code goes here
	$sql="select name from user_x_e_s where name = '$user';";
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
		echo "Co user";
		$sql2 = "select name, password from user_x_e_s where name = '$user' AND password = '$pass';";
		if ($result->num_rows >0){
			echo "Login thanh cong <a href='logged.php'>vao day dể CRUD</a>";
			$_SESSION["LOGGEDIN"] = 1;
		}
		else {
			echo "User pass khong dung, vui long nhap lai!";
		}
	}
	else{
		echo "Không có user tồn tại";
	}
}
$conn->close();
?>

