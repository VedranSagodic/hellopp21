<?php
if(isset($_POST['naziv'])){
  require_once 'konfiguracija.php';

  if(isset($_POST['verificiran'])){
    $_POST['verificiran']=true;
  }else{
    $_POST['verificiran']=false;
  }
  //elog($_POST);

  $izraz=$veza->prepare('insert into smjer (naziv,opis,cijena,verificiran)
  values (:naziv, :opis, :cijena, :verificiran)');
  $izraz->execute($_POST);
  header('location: privatno.php');
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
<input type="text" id="naziv" name="naziv">
</div>
<div class="floated-label-wrapper">
<label for="opis">Opis</label>
<textarea name="opis" id="opis" cols="30" rows="10"></textarea>
</div>
<div class="floated-label-wrapper">
<label for="cijena">Cijena</label>
<input type="number" id="cijena" name="cijena">
</div>
<div class="floated-label-wrapper">
<label for="verificiran">Verificiran</label>
<input type="checkbox" id="verificiran" name="verificiran">
</div>
<input class="button expanded" type="submit" value="Dodaj novi smjer">
</form>

<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
</body>
</html>