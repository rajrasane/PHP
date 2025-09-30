<?php
	session_start();
	$_SESSION['phrase'] = $_GET['data'];
	$_SESSION['font'] = $_GET['f-f'];
	$_SESSION['bg-color'] = $_GET['bg'];
?>
