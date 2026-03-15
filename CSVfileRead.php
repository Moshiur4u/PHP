<?php
// include ("vendor/autoload.php");
include "vendor/autoload.php";
use League\Csv\Reader;
$Reader = Reader::createFromPath("books.csv","r");
$books = $Reader->getRecords();
foreach ($books as $book) {
    // print_r($book);
    $output = "Book Name ={ $book[0]} Author = {$book[1]}" .PHP_EOL;
    echo $output;
}