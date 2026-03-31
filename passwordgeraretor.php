<?php
function generatePassword($length,$lowerCase, $uperCase, $numbers, $symbls){

$lowercaseCharacter = "abcdefghijklmnopqrstuvwxyz";
$upercaseCharacter = "ABCDEFGHIJKLMNOPQRSTUVWXY";
$allnumbbers =" 0123456789";
$allsymbles ="!@#$%^&*().\{}[]()|?/,";
$character ="";

if($lowerCase){
    $character = $lowercaseCharacter;
}
if($uperCase){
    $character = $upercaseCharacter;
}
if ($numbers) {
    $character = $allnumbbers;
}
if ($symbls) {
    $character = $allsymbles;
}

// echo $character ;
$shuffle = str_shuffle($character);
// echo $shuffle;

$password = substr($shuffle, 0, $length);
echo $password;

}
$generatedPassword = generatePassword(14,true,true,true,true);