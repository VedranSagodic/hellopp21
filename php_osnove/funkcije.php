<?php

require_once 'php_osnove/zajednicko.php';

ispis_get();

$_GET['ime']='Pero';

ispis_get();

$_GET['prezime']='Lek';

ispis_get();

//phpinfo();

ispis($_SERVER);
$niz=[2,3,32,2,2,2];
ispis($niz);
ispis(['a',true],false);
ispis('Pero',true);

for($i=0;$i<10;$i++){
    echo slucajniIznos() . '<br />';
}

for($i=0;$i<10;$i++){
    echo slucajniIznosRaspon(500,600) . '<br />';
}












