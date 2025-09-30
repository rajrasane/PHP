<html>
<body>
<form method="get">
    Number 1: <input type="text" name="num1"><br>
    Number 2: <input type="text" name="num2"><br>
    Operation: 
    <select name="op">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mul">Multiply</option>
        <option value="div">Divide</option>
    </select><br>
    <input type="submit" value="Calculate">
</form>
<?php
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $a = $_GET['num1'];
    $b = $_GET['num2'];
    $op = $_GET['op'];

    switch ($op) {
        case "add": $res = $a + $b; break;
        case "sub": $res = $a - $b; break;
        case "mul": $res = $a * $b; break;
        case "div": $res = $a / $b; break;
    }

    echo "<h3>Result: $res</h3>";
}
?>
</body>
</html>
