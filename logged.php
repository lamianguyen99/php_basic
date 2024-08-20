<?php 
session_start();
if ($_SESSION['LOGGEDIN'] == 1){

	header("Location: index.php?message=" . $message . "");
}	
else{
	
	header("Location: failpage.php?message=" . $message . "");
}
?>
