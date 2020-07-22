<?php
require_once 'config.php';

if(!isset($_POST['email']) || !isset($_POST['password'])){
    header('location: index.php?error=1');
    exit;
}

// ovdje neće doći ukoliko ključevi email i lozinka nisu postavljeni

if(trim($_POST['email'])==='' || trim($_POST['password'])===''){
    header('location: index.php?error=2');
    exit;
}

// sada sam siguran kako su ključevi postavljeni i kako postoje vrijednosti

//loše dummy rješenje

if($_POST['email']!=='vedran@edunova.hr' && $_POST['lozinka']!=='1234'){ 
        header('location: index.php?error=3');
        exit;
}

// tu sam siguran da se korisnik uspješno autorizirao i radim što treba
$_SESSION['autoriziran']=$_POST['email'];
header('location: user_page.php');

?>
