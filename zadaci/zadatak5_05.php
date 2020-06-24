<?php

// Program unosi 2 broja.
// Ako je zbroj dva unesena broja parni tada ispisuje
// sve brojeve od 1 do tog parnog broja
// inače ispisuje sve brojeve od tog neparnog broja do 1

// ulaz x=4 i y=5 
// 1,2,3,4,5,..., 20 -> jedno ispod drugog

// ulaz x=3 i y=7
// 21,20,19,28,...., 1

$i=$_GET['x'];
$j=$_GET['y'];


for($k=$i+$j;$k!=0;$k%2==0){
    echo $k++ . '<br/>';
}