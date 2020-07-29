<?php
require_once 'config.php';

$userLogin = array (
    'vedran@edunova.hr'=>'1234',
    'ivona@edunova.hr'=>'123456',
    'edunova@edunova.hr'=>'edunova'
);

if(!isset($_POST['email']) || !isset($_POST['password'])){
     header('location: index.php?p=1');
    exit;
}

// ovdje neće doći ukoliko ključevi email i lozinka nisu postavljeni

if(trim($_POST['email'])==='' || trim($_POST['password'])===''){
    header('location: index.php?p=2');
    exit;
}

// sada sam siguran kako su ključevi postavljeni i kako postoje vrijednosti

//loše dummy rješenje

    
if(!($userLogin[$_POST['email']] == $_POST['password'])) {
    header('location: index.php?p=3');
    exit;
    }

if(isset($_POST['email'])) {
if($userLogin[$_POST['email']] == $_POST['password']) {
    $_SESSION['autoriziran'] = $_POST['email'];
    header('location: user_page.php');
    }
}
?>