<?php

//Stranica prima tri broja pute GET metode
// Stranica ispisuje najveći primljeni broj

$i=$_GET['b1'];
$j=$_GET['b2'];
$k=$_GET['b3'];

if($i>$j & $i>$k){
    echo $i . "najveci broj";
}
if($j>$i & $j>$k){
    echo $j ."najveci broj";

}else echo $k . "najveci broj";
?>