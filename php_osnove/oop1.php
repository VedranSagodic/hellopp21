<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
require_once 'funkcije.php';
require_once 'Osoba.php';

// kreiranje objekta
$o = new Osoba();
// OVO NIJE NAJBOLJA PRAKSA - zaobišlo se OOP princip učahurivanja
$o->ime='Marina';
$o->prezime='Karlović';

echo $o->getImePrezime();

hr();

$s = new Smjer();
// implementacija učahurivanja
$s->setNaziv('Edunova škola informatike');

echo $s->getAkronim();


hr();


$grupa=new Grupa();
$grupa->setId(1);
$grupa->setNaziv('PP21');

echo $grupa->getNaziv();

hr();

$operater=new Operater();
$operater->setId(1);
$operater->setEmail('edunova@edunova.hr');



?>
</body>
</html>