<?php

$niz=[];
for($i=0;$i<100;$i++){
    $niz[]= rand(3, 13);
}

foreach($niz as $broj){
    if($broj%2!=0){
        continue;
    }
    echo $broj . '<br/>';

}

