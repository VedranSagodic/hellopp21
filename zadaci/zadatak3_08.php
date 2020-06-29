<?php

include_once 'zajednicko.php';

// kreirajte funkciju koja vraća indeksni niz od
// 10 slučajnih brojeva između 1 i 10

function indeksniNiz(){
    $niz=[];
    for($i=0;$i<10;$i++){
        $niz[]=rand(1,10);
    }
    return $niz;
}

$v = indeksniNiz();

ispis($v);

foreach($v as $e){
    echo $e,'<br />';
}

ispis(indeksniNiz());

foreach(indeksniNiz() as $e){
    echo $e,'<br />';
}


