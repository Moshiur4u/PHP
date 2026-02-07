<?php
//Example 1
$age = 18;
$eligible_for_vote = ($age >= 18) ? "Yes" : "NO";
echo "Your Eligible for Vote";
//Example 2---------
echo '<hr>';

$Score = 70;
$grade = ($Score >= 70) ? "A+" : (($Score >= 60) ? "A" : (($Score >= 50) ? "B" : (($Score >= 40) ? "C" : (($Score >= 33) ? "D" : "F"))));
echo "Your Grate Is $grade";
