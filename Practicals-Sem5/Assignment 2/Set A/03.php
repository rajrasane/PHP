<?php
    $xml = new DOMDocument("1.0","UTF-8");
    $BookInfo = $xml->createElement("BookInfo");
    $xml->appendChild($BookInfo);
    $book = $xml->createElement("book");
    $BookInfo->appendChild($book);
    $bookno = $xml->createElement("bookno");
    $book->appendChild($bookno);

    $bookname = $xml->createElement("bookname");
    $book->appendChild($bookname);
    $author = $xml->createElement("authorname");
    $book->appendChild($author);
    $price = $xml->createElement("price");
    $book->appendChild($price);
    $year = $xml->createElement("year");
    $book->appendChild($year);

    $bookno->nodeValue = "1";
    $bookname->nodeValue = "Java";
    $author->nodeValue = "Balguru Swami";
    $price->nodeValue = "250";
    $year->nodeValue = "2006";

    $book2 = $xml->createElement("book");
    $BookInfo->appendChild($book2);
    $bookno2 = $xml->createElement("bookno");
    $book2->appendChild($bookno2);
    $bookname2 = $xml->createElement("bookname");
    $book2->appendChild($bookname2);
    $author2 = $xml->createElement("authorname");
    $book2->appendChild($author2);
    $price2 = $xml->createElement("price");
    $book2->appendChild($price2);
    $year2 = $xml->createElement("year");
    $book2->appendChild($year2);

    $bookno2->nodeValue = "2";
    $bookname2->nodeValue = "C";
    $author2->nodeValue = "Denis Ritchie";
    $price2->nodeValue = "500";
    $year2->nodeValue = "1971"; 
    
    $xml->save("book.xml");
?>