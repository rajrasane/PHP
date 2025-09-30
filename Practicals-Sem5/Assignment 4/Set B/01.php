<?php
$conn = pg_connect("host=localhost dbname=school_db user=postgres password=pass");
if (!$conn) die("Connection failed");

$tno = $_GET['var'];
$result = pg_query_params($conn, "SELECT * FROM TEACHER WHERE tno = $1", array($tno));

if (pg_num_rows($result) > 0) {
    $row = pg_fetch_assoc($result);
    echo "<table border='1'>";
    echo "<tr><th>No</th><td>{$row['tno']}</td></tr>";
    echo "<tr><th>Name</th><td>{$row['tname']}</td></tr>";
    echo "<tr><th>Qualification</th><td>{$row['qualification']}</td></tr>";
    echo "<tr><th>Salary</th><td>{$row['salary']}</td></tr>";
    echo "</table>";
} else {
    echo "Not found";
}
pg_close($conn);
?>
