<?php
session_start();
?>
<html>
<body>
<?php

$us = "raj";
$passwd = "PCQVQ02LL";
$maxAttempts = 3;

if (!isset($_SESSION['failedAttempt'])) {
    $_SESSION['failedAttempt'] = 0;
}

if (isset($_GET['usname']) && isset($_GET['pss'])) {
    $usname = $_GET['usname'];
    $pass = $_GET['pss'];

    if ($_SESSION['failedAttempt'] == $maxAttempts) {
        echo "Maximum Attempts Reached";
        exit;
    }

    if ($usname === $us && $pass === $passwd) {
        echo '
        <form action="" method="">
                <h2>Welcome '.$usname.'!</h2>
        </form>';
        $_SESSION['failedAttempt'] = 1;
    } else {
        $_SESSION['failedAttempt']++;
        echo "Invalid Username or Password. Attempt " . ($_SESSION['failedAttempt'] - 1) . " of " .($maxAttempts). ".";
        showLoginForm();
    }
} else {
    showLoginForm();
}

function showLoginForm() {
    echo '<form action="" method="get">
            Enter Username : <input type="text" name="usname"> <br>
            Enter Password : <input type="password" name="pss"> <br>
            <input type="submit" value="submit">
          </form>';
}
?>
</body>
</html>