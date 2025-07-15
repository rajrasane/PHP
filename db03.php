<?php
$conn = pg_connect("host=localhost dbname=postgres user=postgres password=' ' ");

$oldname = $_POST['oldname'];
$newname = $_POST['newname'];

$query = "UPDATE student SET sname = '$newname' WHERE sname = '$oldname';";

if (!$conn) {
    echo "Failed to connect to the database.";
} else {
    echo "Connection successful.<br>";
    $result = pg_query($conn, $query);
    echo "Updated $oldname to $newname";
}

pg_close($conn);
?>

