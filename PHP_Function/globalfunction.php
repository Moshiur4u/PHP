<?php
// global function
$to = "abc@example.com";
$from = "xyz@admin.com";
$subject = "Order Placed Successfully";
$body = "Oder Completed";

function sendEmail()
{
    //call supper golobal variable
    global $to, $from, $subject, $body;
    echo "Mail to {$to} \n";

    echo "Mail From {$from}";
}
sendEmail();