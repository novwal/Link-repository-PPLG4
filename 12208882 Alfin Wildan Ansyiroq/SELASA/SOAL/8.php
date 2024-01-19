<?php
$umur = 25;
$mtk = 83;
$indo = 87;
$inggris = 86;
$total = $mtk + $indo + $inggris;
$rata = $total / 3;


if($umur >= 16 && $umur <= 25 && $mtk >= 87 && $inggris >= 85 && $indo >= 87 && $rata >= 85){
    echo "diterima";
} else {
    echo "ditolak";
}


?>