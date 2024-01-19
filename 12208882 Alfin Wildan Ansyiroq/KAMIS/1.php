<?php


class MengubahJam {
    private $pukul;

    public function __construct($pukul) {
        $this->pukul = $pukul;
    }

    public function ubahjam() {
        list($jam, $menit) = explode(":", $this->pukul);

        $waktu = ($jam >= 12) ? "pm" : "am";
        $jam = ($jam > 12) ? $jam - 12 : $jam;
        $jam = ($jam == 0) ? 12 : $jam;

        $JamDiubah = sprintf("%02d:%02d %s", $jam, $menit, $waktu);
        return $JamDiubah;
    }
}


$pukul1 = new MengubahJam("15:00");
echo $pukul1->ubahjam()."<br>";  

$pukul2 = new MengubahJam("23:45");
echo $pukul2->ubahjam()."<br>";  

$time3 = new MengubahJam("08:55");
echo $time3->ubahjam()."<br>"; 

?>