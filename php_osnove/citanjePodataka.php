<?php 

require_once 'konfiguracija.php';

$izraz=$veza->prepare('select * from smjer;');
$izraz->execute();

$rezultati = $izraz->fetchAll();

//elog($rezultati);

foreach($rezultati as $red){
    echo $red->naziv . '<br />';
}