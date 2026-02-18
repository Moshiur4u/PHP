<?php
// একটা প্রোগ্রামে ফংশন কত বার কাল করা হইছে তা জানার জন্য 
$count = 0;
function countx()
{
    global $count;
    $count++;
}
echo countx();
echo countx();
echo countx();
echo countx();
echo countx();