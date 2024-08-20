<?php
$servername = "localhost";
$username = "lara_user"; 
$password = "123456789"; 
$dbname = "laravel"; 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {    
	die("Connection failed: " . $conn->connect_error);
}

