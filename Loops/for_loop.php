<?php
$Array = array("Moshiur", "Mim", "Imtiaz");
for ($i = 0; $i < count($Array); $i++) {
    echo $Array[$i] . "<br>";
}
echo "foreach Loop" . "<br>";
foreach ($Array as $Value) {
    echo $Value;
}
