<?php

$niz=[];
$sum=0;
for($i=0;$i<100;$i++){
    $niz[]= rand(5, 10);
    $sum+= $niz[$i];
}

print_r($sum);
