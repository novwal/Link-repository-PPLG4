<?php 
$total = 0;
for($nilai = 3; $nilai <= 30; $nilai++){
    if($nilai % 3 == 0 && 90 % $nilai == 0){
        $total++;
       }
} 
echo "$total<br>";
?>