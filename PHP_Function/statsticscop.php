<?php
// একটা প্রোগ্রামে ফংশন কত বার কাল করা হইছে তা জানার জন্য 
function CountX()
{
    $count = 0;
    $count++;

    echo "Here is local function is Running {$count} \n";
}
CountX();
CountX();
CountX();
CountX();