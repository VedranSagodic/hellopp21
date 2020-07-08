<?php

// PDO - PHP DATA OBJECTS

$server='127.0.0.1';
$baza='edunovaapp21';
$korisnik='edunova'; // onaj korisnik kojem smo dali grant
$lozinka='edunova'; // definirana lozinka u dijelu identified od grant naredbe



$dsn='mysql:host=' . $server. ';dbname=' . $baza . ';charset=utf8';


$veza = new PDO($dsn,$korisnik,$lozinka);

// bazi se ne šalju parametri
//$veza->query('insert into smjer values (null,\'Iz koda\',null,null,null)');

// preporuka: nemojte koristiti funkciju query na pdo objektu ako bazi šaljete parametre
//

$naziv=isset($_GET['naziv']) ? $_GET['naziv'] : 'Prazan';

// :naziv je ključ u asocijativnom nizu
// zaštita od sql injection
$izraz = $veza->prepare('insert into smjer (naziv) values (:naziv)');
$izraz->execute(['naziv'=>$naziv]);

