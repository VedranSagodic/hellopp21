<?php

// kreirajte funkciju koja vraća prvi parni broj
// u odnosu na raspon primljenih dva broja

// pošaljem 4 i 9, funkcija vraća 4
// pošaljem 5 i 9, funkcija vraća 6
// pošaljem 9 i 5, funkcija vraća 6
// pošaljem 5 i 5, funkcija vraća false

function prviParnibroj($a,$b){
    $od = $a<=$b ? $a : $b;
    $do = $b>=$a ? $b : $a;

    for($i=$od; $i<$do; $i++){
        if($i%2===0){
            return $i;
        }
    }
    return false;
}

echo gettype(prviParnibroj(4,9)), '<br />';
echo gettype(prviParnibroj(5,9)), '<br />';
echo gettype(prviParnibroj(9,5)), '<br />';
echo gettype(prviParnibroj(5,5)), '<br />';

