<?php

//loops--------------While Loop
while (condition) {
    # code...
}
//Do While Loop
do {
    # code...
} while (condition);
for ($i = 0; $i < 10; $i++) {
    # code...
}
//Foreach Loop
foreach ($array as $value) {
    # code...
}
//Associative Array Foreach Loop
foreach ($array as $key => $value) {
    # code...
}
function exampleFunction()
{
    for ($i = 0; $i < 5; $i++) {
        if ($i % 2 == 0) {
            continue;
        }
        echo $i;
    }
}
exampleFunction();
//Using break in a loop
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i;
}
