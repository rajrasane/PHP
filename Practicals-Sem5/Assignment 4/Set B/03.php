<?php
$books = ["1984", "Harry Potter", "The Hobbit", "Pride and Prejudice", "The Great Gatsby"];
$query = $_GET['query'];

foreach ($books as $book) {
    if (stripos($book, $query) !== false) {
        echo "<div>$book</div>";
    }
}
?>
