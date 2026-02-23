<?php
$dalivaryDay = 3;
$dalivaryTimestamp = strtotime("+$dalivaryDay day");
// $dalivarydate = date("y-m-d", $dalivaryTimestamp);
// echo "$dalivarydate";
echo "ডেলিভারি তারিখ " . date("y-m-d", $dalivaryTimestamp);