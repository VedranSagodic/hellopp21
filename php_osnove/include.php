<?php

include_once 'php_osnove/konfiguracija.php';

echo 'Tekst iz datoteke include.php';

echo '<br />';

// include omogućuje poziv i izvođenje sadržaja iz datoteke
// include: ukoliko datoteka koju uključujemo 
// ne postoji PHP nastavlja dalje

include 'php_osnove/zajednicko/prva.php';

echo '<br />';
echo 'Tekst iz datoteke include.php u nastavku';


for($i=0;$i<10;$i++){
    include 'php_osnove/zajednicko/druga.php';
    include_once 'php_osnove/zajednicko/prva.php';
}

