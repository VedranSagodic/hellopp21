<?php

require_once 'konfiguracija.php';

$izraz=$veza->prepare('create table izkoda(sifra int, naziv varchar(50));');

$izraz->execute();