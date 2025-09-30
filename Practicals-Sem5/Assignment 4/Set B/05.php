<?php
$conn = pg_connect("host=localhost dbname=shop_db user=postgres password=pass");
if (!$conn) die("Connection failed");

$result = pg_query($conn, "SELECT * FROM CATEGORY ORDER BY category_name");
$options = "<option value=''>Select</option>";

while ($row = pg_fetch_assoc($result)) {
    $options .= "<option value='{$row['category_id']}'>{$row['category_name']}</option>";
}

echo $options;
pg_close($conn);
?>
