<?php
//Example 1
$Array = array("Moshiur", "Mim", "Imtiaz");
for ($i = 0; $i < count($Array); $i++) {
    echo $Array[$i] . "<br>";
}
echo "foreach Loop" . "<br>";
//Example 3 with foreach_loop
foreach ($Array as $Value) {
    echo $Value;
}
