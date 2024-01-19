<?php 
$jam = "6";
$mnt = "40";
$jk = "jam kerja";
$bjk = "bukan jam kerja";
$ji = "jam istirahat";
if($jam >= "7" &&  $mnt >= "0" && $jam <= "11" && $mnt >= "15" ||$jam >= "12" && $mnt >= "15" && $jam < "16" ){
      echo $jk;
}elseif($jam >= "11" && $mnt >= "30" || $jam <= "12" && $mnt <= "15"){
    echo $ji;
}elseif( $jam > "15" && $jam <= "7" ){
    echo $bjk;
}else{
    echo $bjk;
}



?>