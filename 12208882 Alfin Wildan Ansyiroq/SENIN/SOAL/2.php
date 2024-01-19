<?php
$jPeserta = 121;
$lomba = "web app";
$pendidikan = "smk"; 
$tahunPelaksanaan = date('y');

if($pendidikan == "smp"){
    $tingkat = "P";
}else{
    $tingkat = "A";
}

if($lomba == "web app"){
     $kode = "01W";
}elseif($lomba == "android"){
    $kode = "02A";
}elseif($lomba == "game"){
    $kode = "03G";
} 
echo "nomor peserta eko adalah = ". ($jPeserta + 1) . $kode . $tingkat . $tahunPelaksanaan;
?>