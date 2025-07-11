<?php
    $connect = pg_connect("host=localhost dbname=postgres user=postgres")
        or die("Connection error");

    if(!$connect){
        echo "Connected Failed";
    }else{
        echo "Connection Succeed\n";
    }

    pg_close($connect);
?>
