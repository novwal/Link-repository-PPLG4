<?php
$jamKerjaPerHari = 8; 
$istirahatSholat = 20; 
$istirahatMakan = 30; 

function hitungTotalWaktu($jamKerjaPerHari, $istirahatSholat, $istirahatMakan) {

    $waktuKerjaPerHari = $jamKerjaPerHari * 60;

    $totalWaktuIstirahatSholat = $istirahatSholat * 5;

    $totalWaktuIstirahatMakan = $istirahatMakan * 3;

    $totalWaktuKerja = $waktuKerjaPerHari;

    $jamKerja = floor($totalWaktuKerja / 60);

    $menitIstirahatSholat = $totalWaktuIstirahatSholat % 40;

    $menitIstirahatMakan = $totalWaktuIstirahatMakan % 60;

    $totalWaktuIstirahat = $totalWaktuIstirahatSholat + $totalWaktuIstirahatMakan;
   
    return [
        'jamKerja' => "$jamKerja jam",
        'menitIstirahatSholat' => "$menitIstirahatSholat menit",
        'menitIstirahatMakan' => "$menitIstirahatMakan menit",
        'totalWaktuIstirahat' => "$totalWaktuIstirahat menit"
    ];
}



$hasilWaktu = hitungTotalWaktu($jamKerjaPerHari, $istirahatSholat, $istirahatMakan, );

echo "Total Waktu Kerja: " . $hasilWaktu['jamKerja'] . "<br>";
echo "Total Waktu Istirahat Sholat: " . $hasilWaktu['menitIstirahatSholat'] . "<br>";
echo "Total Waktu Istirahat Makan: " . $hasilWaktu['menitIstirahatMakan']."<br>";
echo "Total Waktu Istirahat adalah :" . $hasilWaktu['totalWaktuIstirahat'] ;

?>