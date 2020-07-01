<?php

require_once 'funkcije.php';

//https://www.php.net/manual/en/language.oop5.magic.php
class Osoba
{
    private $podaci;

    public function __construct()
    {
        $this->podaci=[];
    }

    public function __get($sto)
    {
        echo '__get ' . $sto . '<br />';
        return $this->podaci[$sto];
    }

    public function __set($sto, $vrijednost)
    {
        echo '__set ' . $sto . ' = '. $vrijednost . '<br />';
        $this->podaci[$sto]=$vrijednost;
    }

}

$o = new Osoba(); // poziv konstruktora

$o->ime='Pero';

echo $o->ime;

hr();

// sve potrebno nama za rad s klasom ima klasa stdClass
$o=new stdClass();

$o->ime='Pero';
$o->student=true;
$o->novaca=23.99;

elog($o);