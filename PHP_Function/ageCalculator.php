<?php
function ageCalculator($birthDat){
    $today = new DateTime();
    $birth = new DateTime($birthDat);
    $age = $today->diff($birth);

    return [
         'years'=>$age->y,
         'month' =>$age->m,
         'days' =>$age->d,
         'totaldays'=>$age->days
         ];
}
$birthDat= "1993-12-30";
$age = ageCalculator($birthDat);
echo "বছর " . $age['years'] . "মাস " . $age['month'] . "দিন " . $age['days'];