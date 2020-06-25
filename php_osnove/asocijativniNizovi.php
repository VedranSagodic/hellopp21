<?php
//inicijalizacija praznog niza
$niz=[];

//dodavanje nogo elementa u niz

$niz['kljuc']='vrijednost';

$niz[2]='Osijek';

$niz['Osijek']=4;

echo '<pre>';
print_r($niz);
echo '<pre>';

echo $niz['Osijek'];

//analogija s ugrađenim nizovima

echo $_GET['b1'];

echo '<hr />';

foreach($niz as $kljuc => $vrijednost){
    echo $vrijednost . '<br/>';
}


$niz[]= 'Novi element';

echo '<pre>';
print_r($niz);
echo '<pre>';

