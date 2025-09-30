<?php
session_start();
$_SESSION['eno'] = $_POST['eno'];
$_SESSION['ename'] = $_POST['ename'];
$_SESSION['address'] = $_POST['address'];
?>
<html>
<body>
<h2>Earnings</h2>
<form action="page3.php" method="post">
    Basic: <input type="text" name="basic"><br>
    DA: <input type="text" name="da"><br>
    HRA: <input type="text" name="hra"><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
