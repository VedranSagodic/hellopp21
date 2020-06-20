<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Foundation for Sites</title>
<link rel="stylesheet" href="assets/css/foundation.css">
</head>
<body>

<div class="grid-container">
<div class="grid-x grid-padding-x">
<div class="large-12 cell">
<div class="callout">
<?php
//name atribut input elementa će definirati ključ

$prviBroj=isset($_GET['prviBroj']) ? $_GET['prviBroj'] : 0;
$drugiBroj=isset($_GET['drugiBroj']) ? $_GET['drugiBroj'] : 0;

?>
<form action="">

Prvi broj
<input type="number" name="prviBroj" value="<?php echo $prviBroj; ?>" />

Drugi broj
<input type="number" name="drugiBroj" value="<?php echo $drugiBroj; ?>" />

<input class="button" type="submit" value="Zbroji">


</form>
<?php


echo $prviBroj+$drugiBroj;

?>
</div>
</div>
</div>
</div>

<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
</body>
</html>