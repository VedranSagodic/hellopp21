<?php
require_once 'konfiguracija.php';

if(isset($_POST['naziv'])){
if(isset($_POST['verificiran'])){
$_POST['verificiran']=true;
}else{
$_POST['verificiran']=false;
}

//elog($_POST);

$izraz=$veza->prepare('update smjer set
naziv=:naziv,
opis=:opis,
cijena=:cijena,
verificiran=:verificiran
where sifra=:sifra');
$izraz->execute($_POST);
header('location: privatno.php');
}

if(isset($_GET['sifra'])){
$izraz=$veza->prepare('select * from smjer where sifra=:sifra');
$izraz->execute($_GET);
$smjer=$izraz->fetch();
}

?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edunova APP</title>
<link rel="stylesheet" href="assets/css/foundation.css">
</head>
<body>

<form class="callout" method="POST">
<h2>Dodavanje smjera</h2>
<div class="floated-label-wrapper">
<label for="naziv">Naziv</label>
<input type="text" id="naziv" name="naziv" value="<?php echo $smjer->naziv ?>">
</div>
<div class="floated-label-wrapper">
<label for="opis">Opis</label>
<textarea name="opis" id="opis" cols="30" rows="10"><?php echo $smjer->opis ?></textarea>
</div>
<div class="floated-label-wrapper">
<label for="cijena">Cijena</label>
<input type="number" id="cijena" name="cijena" value="<?php echo $smjer->cijena ?>">
</div>
<div class="floated-label-wrapper">
<label for="verificiran">Verificiran</label>
<input type="checkbox" id="verificiran" name="verificiran" <?php

echo $smjer->verificiran ? ' checked="checked"' : '';

?>>
</div>
<input type="hidden" name="sifra" value="<?php echo $smjer->sifra ?>">
<input class="button expanded" type="submit" value="Promjeni smjer">
</form>

<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
</body>
</html>