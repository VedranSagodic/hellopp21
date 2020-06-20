<?php

echo '<pre>';
//print_r($_SERVER);
echo '</pre>';
echo $_SERVER['MIBDIRS'];
echo '</hr>';
foreach($_SERVER as $kljuc =>$vrijednost){
    echo '<b>', $kljuc, '</b>:', $vrijednost, '<br>';
}


echo '</hr>';

foreach($_SERVER as $vrijednost){
    echo $vrijednost, '<br/>';
}

