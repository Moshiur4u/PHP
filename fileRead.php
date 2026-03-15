<?php
$file = fopen("new.txt","r");
while(!feof($file)){
    echo fgets($file);
}
