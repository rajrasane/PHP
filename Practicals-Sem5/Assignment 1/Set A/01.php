<!-- 1. Write a PHP script to keep track of number of times the web page has been access.[Use session and cookies] -->

<!-- Using Cookies -->
<?php
	if(isset($_COOKIE['count'])){
		$c = $_COOKIE['count']+=1;
		setcookie('count',$c);
		echo "Visited : " .  $_COOKIE['count'];
	}
	else{
		$c = 1;
		setcookie('count',$c);
		echo "Visited : " .  $c;
	}
?>

<!-- Using Session -->
<?php
	session_start();
	if(isset($_SESSION['counter'])){
		$_SESSION['counter'] += 1;
	}
	else{
		$_SESSION['counter'] = 1;
	}
	echo "Visited : " . $_SESSION['counter'];
?>
