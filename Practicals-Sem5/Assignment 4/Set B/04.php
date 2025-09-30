<?php
$conn = pg_connect("host=localhost dbname=shop_db user=postgres password=pass");
if (!$conn) die("Connection failed");

$pid = $_GET['pid'];
$result = pg_query_params($conn, "SELECT * FROM PRODUCT WHERE pid = $1", array($pid));

if (pg_num_rows($result) > 0) {
    $r = pg_fetch_assoc($result);
    echo "<table border='1'>";
    echo "<tr><th>ID</th><td>{$r['pid']}</td></tr>";
    echo "<tr><th>Name</th><td>{$r['pname']}</td></tr>";
    echo "<tr><th>Price</th><td>{$r['price']}</td></tr>";
    echo "</table>";
} else {
    echo "Not found";
}
pg_close($conn);
?>
