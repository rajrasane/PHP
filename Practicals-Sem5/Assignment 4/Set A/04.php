<?php
$text = $_GET['name'];
$cities = ["mumbai","mangalore", "delhi", ];
$strmatch = [];

foreach ($cities as $a) {
    if (stripos($a, $text) === 0) {
        $strmatch[] = ucfirst($a);
    }
}

if (!empty($strmatch) && strlen($text) != 0) {
    echo "City found: " . implode(", ", $strmatch);
} else {
    if (strlen($text) == 0) {
        echo "Please enter some text!";
    } else {
        echo ucfirst($text) . " not found in city list.";
    }
}
?>