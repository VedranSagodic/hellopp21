<?php

$j=$GET['b1'];
$k=$_GET['b2'];
$i=$_GET['b3'];

$brojevi=[];
$brojevi[]= $i;
$brojevi[]= $k;
$brojevi[]= $j;

echo $brojevi[1];

//drugi način
$brojevi=[];
$brojevi[]=$_GET['b1'];
$brojevi[]=$_GET['b2'];
$brojevi[]=$_GET['b3'];

echo $brojevi['b2'];

//treći način

$brojevi = [
    $_GET['a'],
    $_GET['b'],
    $_GET['c']
];
echo $brojevi['b'];