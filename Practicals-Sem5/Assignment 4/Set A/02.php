<?php
    $name = $_GET['uname'];
    $a = array("Rohit","Virat","Dhoni","Ashwin","Harbhajan");
    if(in_array($name,$a)){
        echo "Hello, master ".$name;
    }
    else{
        echo "$name, I don't know you";
    }
?>