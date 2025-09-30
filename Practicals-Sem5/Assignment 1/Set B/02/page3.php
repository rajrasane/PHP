<?php
session_start();
$_SESSION['basic'] = $_POST['basic'];
$_SESSION['da'] = $_POST['da'];
$_SESSION['hra'] = $_POST['hra'];


$total = $_SESSION['basic'] + $_SESSION['da'] + $_SESSION['hra'];
?>
<html>
<body>
<h2>Employee Information</h2>
<?php
echo "Employee No: " . $_SESSION['eno'] . "<br>";
echo "Employee Name: " . $_SESSION['ename'] . "<br>";
echo "Address: " . $_SESSION['address'] . "<br>";
echo "Basic: " . $_SESSION['basic'] . "<br>";
echo "DA: " . $_SESSION['da'] . "<br>";
echo "HRA: " . $_SESSION['hra'] . "<br>";
echo "Total: " . $total;
?>
</body>
</html>
