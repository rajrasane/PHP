<?php
	session_start();
	$_SESSION['counter'];
	// session_unset();
	if(isset($_SESSION['counter'])){
		$_SESSION['counter'] += 1;
	}
	else{
		$_SESSION['counter'] = 0;
	}
	echo "Visited : " . $_SESSION['counter'];
?>
