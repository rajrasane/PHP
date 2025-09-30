<?php
$conn = pg_connect("host=localhost dbname=shop_db user=postgres password=pass");
if (!$conn) die("Connection failed");

$cno = $_GET['var'];
$cust = pg_query_params($conn, "SELECT * FROM CUSTOMER WHERE cno = $1", array($cno));

if (pg_num_rows($cust) > 0) {
    $c = pg_fetch_assoc($cust);
    echo "<b>Customer:</b> {$c['cname']} ({$c['city']})<br><br>";
    
    $orders = pg_query_params($conn, "SELECT * FROM ORDERS WHERE cno = $1", array($cno));
    if (pg_num_rows($orders) > 0) {
        echo "<table border='1'><tr><th>Order No</th><th>Date</th><th>Address</th></tr>";
        while ($o = pg_fetch_assoc($orders)) {
            echo "<tr><td>{$o['ono']}</td><td>{$o['odate']}</td><td>{$o['shipping_address']}</td></tr>";
        }
        echo "</table>";
    }
}
pg_close($conn);
?>
