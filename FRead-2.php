<?php
$content = file_get_contents("books.text");
echo $content;
//totalBookCount
$books = explode("\n",$content);
echo "Total Number of books:".count($books)-1;