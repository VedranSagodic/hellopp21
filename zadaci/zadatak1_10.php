<?php

// kreirati stranicu zadatak1.php 
// koja u bazu edunovapp21 unosi osobu (podatke o osobi definirajte sami)

require_once 'konfiguracija.php';

$veza->query('insert into osoba (prezime,ime,email) values
(\'Marija\', \'Zimka\',\'mzimka@gmail.com\')');