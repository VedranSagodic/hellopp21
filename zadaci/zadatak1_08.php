<?php

// kreirati fukciju koja prima tri parametra
// funkcija vraća najveći broj od tri primljena broja
// koji se nalaze u parametrima funckije

function najveci($a,$b,$c){
    if($a>=$b && $a>=$c){
        return $a;
    }
    if($b>=$a && $b>=$c){
        return $b;
    }

    return $c;
}

for($i=0;$i<100;$i++){
    $b1=rand(1,5);
    $b2=rand(1,5);
    $b3=rand(1,5);
    echo $b1, ',' , $b2, ',', $b3, ' = '. najveci($b1,$b2,$b3), '<br />';
}
/*
echo najveci(2,3,4), '<br />';
echo najveci(3,3,3), '<br />';
echo najveci(4,3,4), '<br />';
echo najveci(1,1,4), '<br />';
echo najveci(4,4,1), '<br />';
echo najveci(1,3,1), '<br />';
*/