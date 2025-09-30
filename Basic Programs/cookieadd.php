<?php
    $a=$_GET['a'];
    $b=$_GET['b'];

    setcookie('x',$a);
    setcookie('y',$b);
?>
<html>
    <head>
            <title>Addition using php</title>
    </head>
    <body>
            <form method='get' action=''>
                    Enter number 1 : <input type='number' name='a'>
                    Enter number 2 : <input type='number' name='b'>
                    <input type='submit' value='submit'>
            </form>
    </body>
</html>
