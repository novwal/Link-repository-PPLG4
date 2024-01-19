<?php

$bilangan = [75, 77, 87,70, 90, 81,69,87,66,];
foreach($bilangan as $bil){
    if($bil >= 75){
        $kompeten[] = $bil;
    }else{
        $tidak[] = $bil;
    }
}

echo "Kompeten: ". implode(',', $kompeten)."<br>";
echo " Tidak Kompeten: ". implode(',', $tidak)."<br>";

?>