<html>
<head>
    <title>Factorial</title>
</head>
<body>
    Enter a number to find it's factorial : 
    <form action="factorial.php" method="get">
        <input type="number" name="num" />

        <input type="submit" value="submit" name="submit"/>
    </form>
    
</body>

    <?php
        if(isset($_GET['submit'])){
            $n = $_GET['num'];
            function fact($n){
                if($n==1){
                    return 1;
                }
                return $n * fact($n-1);
            }

            $factorial = fact($n);

            echo "Factorial of $n is $factorial";
        }
    ?>
</html>