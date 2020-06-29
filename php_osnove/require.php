<?php

// include_once: učita i izvede sadržaj datoteke samo jednom 
require_once '/php_osnove/konfiguracija.php';

echo 'Tekst iz datoteke require.php';

echo '<br />';

// require omogućuje poziv i izvođenje sadržaja iz datoteke
// require: ukoliko datoteka koju uključujemo ne postoji 
// javlja se greška PHP 

require '/php_osnove/zajednicko/treca.php';

echo '<br />';
echo 'Tekst iz datoteke require.php u nastavku';


for($i=0;$i<10;$i++){
    require '/php_osnove/zajednicko/cetvrta.php';
    require_once '/php_osnove/zajednicko/treca.php';
}
