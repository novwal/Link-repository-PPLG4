<?php
$JKS= 8;
$KP = 50000;
$KS=25000;
$BJK =13;
$TD = 15;
$TK=0;

$TK += $KP;
for($i = 1; $i <= $BJK - $JKS; $i++ ){
    if(($JKS + $i) <= $BJK) {
        $TK += $KS;
    }
}
echo $TK;
?>