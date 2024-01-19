<?php 
$diskon = 7 / 100;
$andi = 154000;
$min = 100000;
$hargadis = $andi * $diskon;
$total = $andi - $hargadis;

if($andi >= $min ){
    echo "Dapat diskon 7% <br>";
    echo "Yang Harus dibayar adalah Rp.$total";
}else{
    echo "Yang Harus dibayar adalah Rp.$andi";
}
?>