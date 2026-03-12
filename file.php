<?php
$file = fopen("new.txt","R");//File Hahdel//
$data = "Hello Learner!";
fwrite($file,$data);
fclose($file);
?>