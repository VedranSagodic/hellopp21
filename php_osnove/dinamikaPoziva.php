<?php 

require_once 'Osoba.php';

$klasa='Operater';
$metoda='getId';

$o = new $klasa();
$o->setId(1);

echo $o->$metoda();


$klasa='Grupa';

$o = new $klasa();
$o->setId(2);

echo $o->$metoda();

