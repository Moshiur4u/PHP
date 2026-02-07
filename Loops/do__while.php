<?php

//Example 1-------
$i = 5;
do {
	echo $i . "\n";
	$i--;
} while ($i > 0);
//Example 2---------
echo "<br>";
$j = 0;
do {
	echo $j . "\n";
	$j++;
} while ($j < 10);


echo "<br>";
//Example 3----------
$choice = 0;
do {
	echo "Menu: 1=Start, 2=Continue, 0=Exit\n";
	$choice = rand(0, 2);
	echo "You chose: $choice\n";
} while ($choice != 0);

echo '<br>';

//Example 4----------
$count = 0;
do {
	if ($count == 5) {
		break;
	}
	echo "Count: $count\n";
	$count++;
} while ($count < 10);
