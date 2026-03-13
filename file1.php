<?php
$books = [
    "Bangla",
    "English",
    "Math",
    "Islam",
    "socalsceince",
];
$file = fopen("books.text","w");
//fwrite($file,$books[0].PHP_EOL);
//fwrite($file,$books[1].PHP_EOL);
//fwrite($file,$books[2].PHP_EOL);
//fwrite($file,$books[3].PHP_EOL);
//fwrite($file,$books[4].PHP_EOL);

foreach ($books as $book){
    fwrite($file, $book.PHP_EOL);
}