<?php 
include_once('config.php');

$id = $_GET['id'];
$sql = "delete from user_x_e_s where id=$id";
if ($conn->query($sql) === TRUE){
	echo "Deleted";
}
else{
	echo "cannot delete";
}

header("Location: index.php?message=" . $message . "");

