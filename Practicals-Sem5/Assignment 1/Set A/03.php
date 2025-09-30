<?php
// Display key server information: client IP address, browser type, host name, request URI, and referring page.
//var_dump($_SERVER);
echo"REQUEST_URI: ";
echo $_SERVER['REQUEST_URI']."<br>";
echo"CLIENT_IP_ADDRESS: ";
echo $_SERVER['REMOTE_ADDR']."<br>";
echo"BROWSER_TYPE: ";
echo $_SERVER['HTTP_USER_AGENT']."<br>";
echo"HOST_NAME: ";
echo gethostbyaddr($_SERVER['REMOTE_ADDR'])."<br>";
echo"Reffering page: ";
echo isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : 'No referrer';
?>