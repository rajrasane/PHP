<?php
        if(isset($_POST['check'])){
            if($_POST['check']=='Yes'){
                header("Location: https://www.google.com");
                exit;
            }  
        }
    ?>
<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <p>Do you want to visit google ? </p>
            <input type="submit" name="check" value="Yes" />
            <input type="submit" name="check" value="No" />
        </form>
    </body>
</html>