<?php
session_start();
?>
<html>
<body>
<h2>Employee Details</h2>
<form action="page2.php" method="post">
    Employee No: <input type="text" name="eno"><br>
    Employee Name: <input type="text" name="ename"><br>
    Address: <input type="text" name="address"><br>
    <input type="submit" value="Next">
</form>
</body>
</html>