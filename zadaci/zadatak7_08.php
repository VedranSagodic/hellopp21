<?php

// Funkcija prima broj i vraća ukupan zbroj svih brojeva od 1 
// do primljenog broja (uključujući primljeni broj)
// rekurzija
function zbroj($broj){
    if($broj===1){
        return 1;
    }
    return $broj-- + zbroj($broj);
}
// prvo slaže ovako
// 100 + 99 + 98 + ... + 2 + 1;

// a konkterno zbrajanje ide s desno na lijevo
echo zbroj(100);
