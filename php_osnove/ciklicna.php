<?php

$redova = 15;
$kolona = 14;
$matrica=[];
for($i=0;$i<$redova;$i++){
    $k=[];
    for($j=0;$j<$kolona;$j++){
        $k[]=0;
    }
    $matrica[]=$k;
}


//ovdje dođe algotiram za punjenje brojava - najteži dio


echo '<table border=1>';
for($i=0;$i<$redova;$i++){
    echo '<tr>';
    for($j=0;$j<$kolona;$j++){
        echo '<td>' . $matrica[$i][$j] . '</td>';
    }
    echo '</tr>';
}

echo '</table>';
