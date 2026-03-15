<?php
$books=<<<EOD
Book1 
Book2
Book3
Book4
Book5
Book6
Finish
EOD;
//রিমোট বা ওয়েব ফাইল পড়ার জন্য file_get_contents ব্যবহার করা হয় ।
//file_get_contents("https://raw.githubusercontent.com/Moshiur4u/PHP/refs/heads/PHP_function/PHP_Function/Callback_Functions.php");
//অনেক গুলো কনেট এক সাথে লেখার জন্য ব্যবহার কারার জন্য।
file_put_contents("books2.text",$books.PHP_EOL, FILE_APPEND);
echo "Done";
