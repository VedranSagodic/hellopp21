<?php

if(!isset($_GET['id'])){
    header('location: index.php');
}

require_once 'config.php';

$izraz=$veza->prepare('delete from users where id=:id');
$izraz->execute($_GET);
header('location: user_page.php');