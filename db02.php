<?php
$conn = pg_connect("host=localhost dbname=postgres user=postgres password=' ' ");
$sname = $_POST['sname'];

$query = "DELETE FROM student WHERE sname = '$sname';";

if (!$conn) {
    echo "Failed to connect to the database.";
} else {
    echo "Connection successful.<br>";
    $result = pg_query($conn, $query);
    if ($result && pg_affected_rows($result) > 0) {
        echo "Record(s) with name '$sname' deleted successfully.";
    } else {
        echo "Failed to delete record or no record found with name '$sname'.";
    }
}

pg_close($conn);
?>
