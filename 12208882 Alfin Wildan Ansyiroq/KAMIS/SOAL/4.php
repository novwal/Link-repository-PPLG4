<?php 

$bil1 = [1,2,3];
$bil2 = [1,2,3,4,5,6,7,8,9,10];

foreach ( $bil1 as $satu){ 
    foreach ( $bil2 as $dua) {
     $hasil = $satu * $dua;

     if($hasil <= 30){
    echo "$satu X $dua = $hasil <br>";
     }
    }
}
?>