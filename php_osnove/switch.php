<?php

// switch je višestruko grananje

$s = isset($_GET['grad']) ? $_GET['grad'] : '';

//$s='Osijek';

switch($s){
    case 'Zagreb':
        echo 'Glavni grad';
        break;
    case 'Osijek':
        echo 'Naš grad';
        break;
    default:
        echo 'Ostali gradovi';
}

echo '<hr />';

$i=4;

switch($i){
    case 1:
    case 2:
    case 3:
        echo 'Opcija 1';
    case 4:
        echo 'Opcija 2';
        break;
    case 7:
        echo 'Najbolja';
}