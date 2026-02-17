<?php

$array = ["Moahiur", "Mim", "Imtiaz"];
foreach ($array as $print) {
    echo "<pre>";
    echo $print . "\n";
    echo "</pre>";
};
echo "<br>";
$array2 = ['Moshiur=32', "Mim=24", "Imtiaz=3"];
foreach ($array2 as $key => $value) {
    // echo "Age Is : - $value";
    echo "<hr>";
    echo "<pre>";
    echo "$key . $value";
    echo "</pre>";
}