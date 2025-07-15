<html>
    <body>
        <form method="get" action="arithmetic.php">
            First Number:
            <input type="number" name="num1">
            <br><br>

            Second Number:
            <input type="number" name="num2" >
            <br><br>

            Operation:
            <select name="operation">
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>
            </select>
            <br><br>

            <input type="submit" name="submit" value="Calculate">
        </form>

        <?php
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];
            $result = "";

            switch ($operation) {
                case "add":
                    $result = $num1 + $num2;
                    break;
                case "subtract":
                    $result = $num1 - $num2;
                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    break;
                case "divide":
                    $result = $num1 / $num2;
                    break;
                default:
                    $result = "Invalid operation";
            }

            echo "<h3>Result: $result</h3>";
        ?>
    </body>
</html>

