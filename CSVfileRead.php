<?php
// include ("vendor/autoload.php");

// র- পিএইচপি তে  Composer require দিয়ে Composer ইন্সস্টল করে নিতে হবে।
include "vendor/autoload.php";
use League\Csv\Reader;
$price = 0;
$Reader = Reader::createFromPath("books.csv","r");
$books = $Reader->getRecords();
foreach ($books as $book) {
    // print_r($book);
    $output = "Book Name ={ $book[0]} Author = {$book[1]}" .PHP_EOL;
   echo $output;
    // $price += $book[2];
    
   $price = $price+$book[2];

}
   echo "Price: $price".PHP_EOL;
// echo "Total Price Is = {$price}";