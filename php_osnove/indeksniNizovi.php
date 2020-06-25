<?php

$niz = array(); // stara sintaksa

$niz = []; //prazan niz


//dodavanje broja 3(integer) u prazan niz
$niz[]=2;

//dodavanje niza znakova (string) pero u niz

$niz[]= 'pero';
$niz[]= true;
echo '<pre>';
print_r($niz);
echo '<pre>';

/* 0 i 1 u uglatim zagradama su indeksi
/*Array
(
    [0] => 2
    [1] => pero
)
*/

echo $niz[1];

//iterirati sve elemente indeksnog niza

echo '<hr />';

echo count($niz);

echo '<hr />';

for($i=0;$i<count($niz);$i++){
    echo 'Na indeksu' . $i .'se nalazi vrijednost' . $niz[$i] . '<br />';
}

echo '<hr />';

foreach($niz as $indeks => $vrijednost){
    echo '';
}

foreach($niz as  $vrijednost){
    echo $vrijednost . '<br />';
}

echo '<hr />';

$niz=[];
for($i=0;$i<100;$i){
    array_push($niz,rand(5,10));
    $sum+=$niz[$i];
}
echo $sum . ' - ' . array_sum($niz);

echo '<hr />';

