<?php
	$conn = pg_connect("host=localhost dbname=postgres user=postgres port=5432");
	if(!$conn){
		echo "Database Connection Unsuccessfull";
	}else{
		echo "Database Connection Successfull";
	}
?>
