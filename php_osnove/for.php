<?php

// generički izgled for(od kuda; do kud; kojim korakom)

for($i=0;$i<10;$i=$i+1){
    echo 'Osijek<br />';
}

echo '<hr />';

// operatori incement i decrement
$i=0;
$i=$i+1; //1
echo $i;
echo '<hr />';
$i+=1; //2
echo $i;
echo '<hr />';
$i++; //3
echo $i;
echo '<hr />';

for($i=0;$i<10;$i++){
    echo $i+1, '<br />';
}

echo '<hr />';

// razlika između $i++ i ++$i
//$i++ prvo koristi vrijednost varijable pa ju uveća
//++$i prvo uveća pa onda koristi vrijednost varijable

// klasični zadaci 
$i=0; $j=2;
$t = ++$i + $j++;
echo $t;

echo '<hr />';

// ista pravila vrijede i za --


$t=2; $k=1;

$t+= ++$k; //$t=4, $k=2
$z=--$t - $k++; // $z=3-2=1   $t=3   $k=3

echo $t+$k+$z; //7

echo '<hr />';

//svaku petlju možemo nastaviti (preskočiti) ili prekinuti;
// (int) je cast implicitna konverzija
$preskoci =isset($_GET['preskoci']) ?  (int)$_GET['preskoci'] : -1 ;
$prekini = isset($_GET['prekini']) ?  (int)$_GET['prekini'] : -1 ;
echo gettype($preskoci), '<br />';
for($i=0;$i<100;$i++){
    if($i===$preskoci){
        continue;
    }
    if($i===$prekini){
        break;
    }
    echo $i, '<br />';
}

echo '<hr />';

// ugnježđivanje petlji
echo '<table border="1">';
for($i=1;$i<=10;$i++){
    echo '<tr>';
    for($j=1;$j<=10;$j++){
        echo '<td>', $i*$j, '</td>';
    }
    echo '</tr>';
}
echo '<table>';



//zatvaranje bloka imeno

for($i=0;$i<10;$i++):

endfor;


// beskonačna petlja
//for(;;){
//    echo 'Osijek';
//}