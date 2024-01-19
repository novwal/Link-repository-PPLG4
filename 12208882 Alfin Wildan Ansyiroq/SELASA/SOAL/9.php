<?php
$bb = 44;
$tb = 1.48; 
$imt = $bb/($tb*$tb) ;

if($imt < 18.5){
    echo "kurang<br>";
}elseif($imt >= 18.5 && $imt < 22.9){
    echo "normal<br>";
}elseif($imt >= 22.9 && $imt < 24.9){
    echo "lebih<br>";
}elseif($imt >= 25){
    echo "obesitas<br>";
}
echo $imt;

?>