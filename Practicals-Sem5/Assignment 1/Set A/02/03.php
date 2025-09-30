<?php
session_start();
echo '<h1 style="font-family:' . $_SESSION['font'] . '; background-color:' . $_SESSION['bg-color'] . ';">' . $_SESSION['phrase'] . '</h1>';
?>