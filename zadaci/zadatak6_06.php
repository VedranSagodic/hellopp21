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
<div class='large-12 cell'>
<div class='callout'>
<form action="">
broj 1
<input type="number" name="prviBroj" value="<?php echo $prviBroj; ?>">
broj 2
<input type="number" name="drugiBroj" >


<input class="button" type="submit" value="lista">

</form>

<?php

//name atribut input elementa ce definirati kljuc
$prviBroj = isset($_GET['prviBroj']) ? $_GET['prviBroj'] :0;
$drugiBroj = isset($_GET['drugiBroj']) ? $_GET['drugiBroj'] :0;
$odkuda = $prviBroj >= $drugiBroj ? $drugiBroj : $prviBroj;
$dokuda =$prviBroj < $drugiBroj ? $drugiBroj : $prviBroj;

for ($i=$odkuda;$i<$dokuda;$i++){
if($i%2 ==0){
continue;
}

echo $i, '<br/>';
}








?>


</div>
</div>

</div>
</div>





<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
</body>
</html>