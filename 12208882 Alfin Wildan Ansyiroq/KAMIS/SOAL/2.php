<?php

$bil1 =[80,77,65,89,55,12,90,86];
$bil2 = [77,99,55,81,45,90,91,98];

$kel1 = array_intersect($bil1 , $bil2);
$kel2 = array_merge(array_diff($bil1,$bil2), array_diff($bil2 , $wbil1));

 echo "Kelompok Pertama : " . implode(',', $kel1)."<br>";
 echo "Kelompok Kedua : " . implode(',', $kel2)."<br>";
?>
