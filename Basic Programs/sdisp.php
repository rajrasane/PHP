<?php
	session_start();
	$name = $_SESSION['name'];
	$lname = $_SESSION['lastname'];
	echo "User Entered First Name : " . $name ; 
	echo "<br/>";
	echo "User Entered Last Name : " . $lname ;
?>
