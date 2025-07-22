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
