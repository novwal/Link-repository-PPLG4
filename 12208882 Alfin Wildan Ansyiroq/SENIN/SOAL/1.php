<?php
$andiDaniTahunKel = 2008; // karena 2024 - 16 = 2008
$beniTahunKel = $andiDaniTahunKel - 3; // karena lebih tua 3 tahun jadi 2008 - 3
$ekoTahunKel = $beniTahunKel + 5;//karna 5 tahun sebelum jadi 2008 - 3 + 5

echo "Andi dan Dani Lahir tahun $andiDaniTahunKel <br>";
echo "Beni Lahir tahun  $beniTahunKel <br>";
echo "Eko Lahir tahun  $ekoTahunKel <br>";

if ($andiDaniTahunKel % 4 == 0 && ($andiDaniTahunKel % 100 != 0 || $andiDaniTahunKel % 400 == 0)) {
    echo " Andi lahir di tahun kabisat <br>";
}elseif($ekoTahunKel % 4 == 0 && ($ekoTahunKel % 100 != 0 || $ekoTahunKel % 400 == 0)){
    echo " Eko lahir di tahun kabisat <br>";
}else {
    echo "Tidak ada yang lahir di tahun kabisat <br>";
}
?>