<?php
//শুধু মাত্র W দিয়ে নতুন ফাইল করা হয় আর W+ দিয়ে পুরাতন ফাইলে লেখা অ্যাড করা হয়।
$file = fopen("new.txt","w+"); //File_Hahdel
$data = "Hello Learner!23";
fwrite($file,$data);
?>