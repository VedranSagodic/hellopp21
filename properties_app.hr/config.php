<?php

session_start();

$server='localhost';
$database='artemida_pp21';
$username='artemida';
$password='Artemida87545';

$dsn='mysql:host=' . $server. ';dbname=' . $database . ';charset=utf8';

$options=[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
];

$veza = new PDO($dsn,$username,$password,$options);

function elog($sto)
{
    echo '<pre>';
    print_r($sto);
    echo '</pre>';
}