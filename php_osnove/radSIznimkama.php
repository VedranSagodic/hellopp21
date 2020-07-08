<?php

require_once 'konfiguracija.php';

$izraz=$veza->prepare('insert into grupa (naziv,smjer) 
values (:naziv_param,:cijena)');

try{
    $izraz->execute(
        [
            'naziv_param'=>'PP2222',
            'cijena'=>2222
        ]
    );
}catch(PDOException $e){
    echo 'Ne mogu dodati grupu jer .... ';
}
