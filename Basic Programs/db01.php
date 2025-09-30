<?php
$conn=pg_connect("host=localhost dbname=postgres user=postgres password=' ' ");
$sid=$_POST['sid'];
$sname=$_POST['sname'];

$query="insert into student values('$sid','$sname');";
if(!$conn){
	echo "Failed";
}else{
	echo "Connection successful";
	$result=pg_query($conn,$query);
	if($result){
		echo "\nRecord inserted Successfully..";
	}else{
		echo "Failed to insert record";
	}
}
pg_close($conn);
?>
