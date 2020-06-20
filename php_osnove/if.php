<?php

// if je binarno grananje. Radi s tipom podatka boolean
//$uvjet=true;
$uvjet=false;

//osnovni izgled if naredbe
if($uvjet){
    echo 'Uvjet je ispunjen';
}
// ne obavezni dio
else{
    echo 'Uvjet nije zadovoljen';
}

echo '<hr />';

if(isset($_GET['uvjet'])){
    $i=$_GET['uvjet'];
}else{
    echo 'Parametar uvjet nije postavljen, koristim vrijednost 0<br />';
    $i=0;
}

//$i=$_GET['uvjet'];

if($i>10){
    echo 'Uvjet je veći od 10';
}else{
    echo 'Uvjet je manji ili jednak 10';
}

echo '<hr />';
// ostale pojavnosti if naredbe

$i=0; $j=1;

//ugnježđeni if
if($i===0){
    if($j===1){
        echo 'Oba uvjeta su zadovoljena';
    }
}

echo '<hr />';

//ovaj izraz je ekvivalent gornjem
// operaror & je logički operator za čije izvođenje oba uvjeta moraju biti zadovoljena
// & bez obzira na ne ispunjenje prvog uvjeta provjerava se drugi
if($i!==0 & $j===1){
    echo 'Oba uvjeta su zadovoljena';
}

// koristiti ćemo uvjetni i &&
// ukoliko prvi uvjet nije zadovljen ne provjerava se drugi
if($i!==0 && $j===1){
    echo 'Oba uvjeta su zadovoljena';
}

// uvjetni ili ||
// ukoliko je prvi uvjet zadovoljen ne provjerava se drugi
if($i===0 || $j===0){
    echo 'Jedan od uvjeta je zadovoljen';
}

echo '<hr />';

// ostale varijante -> bolje je koristiti switch
if($i===0){

}else if ($i===1){
    
}else if ($i===2){

}else{

}

if($_SERVER['SERVER_ADDR']==='127.0.0.1'){
    echo '<p style="color: red  ;">Radim na lokalnom računalu</p>';
}else{
    echo '<p>Radim na produkciji</p>';
}



echo '<hr />';

//inline if - tercijarni operator ? :

    if($i>10){
        echo 'Uvjet je veći od 10';
    }else{
        echo 'Uvjet je manji ili jednak 10';
    }

    echo '<hr />';

    echo $i>10 ? 'Uvjet je veći od 10' : 'Uvjet je manji ili jednak 10';

    echo '<hr />';

    echo 'Uvjet je', $i>10 ? ' veći ' : ' manji ili jednak ', '10';

// NE PREPORUČAM
//Ukoliko nema {} if ili else se odnosi samo na 1. liniju nakon naredbe
if($i===0)
    echo 'OK';

if($i===0)
    echo 'OK';
else
    echo 'NE';
    echo 'Osijek';


// zatvaranje bloka imenom
if($i===0):

endif;

if($i===0){
    
}
