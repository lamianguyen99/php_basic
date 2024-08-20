<?php 
session_start();
if ($_SESSION['LOGGEDIN'] == 1){
	echo "<h1>WELCOME TO CRUD PAGE</h1>";
}	
else{
	echo "<title>Fail web page</title>";	
	echo "<h1>FAILLLLLLLLLLLLLLLLL</h1>";
}
?>
