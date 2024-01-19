<?php 

function hitungPembagian($angka) {
    $hasilPembagian = array();

    if ($angka % 3 == 0) {
        $hasilPembagian[] = 3;
    }

    if ($angka % 5 == 0) {
        $hasilPembagian[] = 5;
    }

    if ($angka % 7 == 0) {
        $hasilPembagian[] = 7;
    }


    if ($angka % 10 == 0) {
        $hasilPembagian[] = 10;
    }

    return $hasilPembagian;
}

function cetakHasil($angka) {
    $hasilPembagian = hitungPembagian($angka);

    if (empty($hasilPembagian)) {
        echo "Angka $angka tidak bisa dibagi dengan angka 3, 5, 7, dan 10.";
    } else {
        echo "Angka $angka bisa dibagi dengan angka <br> ";
        var_dump($hasilPembagian);
    }
}
$angka = 1000;

// Memanggil fungsi untuk mencetak hasil
cetakHasil($angka);

?>