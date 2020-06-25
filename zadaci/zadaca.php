<html>
	<head>
	<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ispis prim brojeva</title>
<link rel="stylesheet" href="/assets/css/foundation.css">
 </head>
<body>

<div class="grid-container">
<div class="grid-x grid-padding-x">
<div class='large-12 cell'>
<div class='callout'>

<form action="">
Manji broj
<input type="number" name="b1" value="<?php echo $prviBroj; ?>">
Veći broj
<input type="number" name="b2" value="<?php echo $drugiBroj; ?>">

<input class="button" type="submit" value="Pošalji">

</form>
 <?php
$prviBroj = isset($_GET['prviBroj']) ? $_GET['prviBroj'] :0;
$drugiBroj = isset($_GET['drugiBroj']) ? $_GET['drugiBroj'] :0;

$prviBroj=$_GET['b1'];
$drugiBroj=$_GET['b2'];
$prim='';
for($prviBroj;$prviBroj<$drugiBroj;$prviBroj++):

for($primBroj=2;$primBroj<$prviBroj;$primBroj++):

if($prviBroj%$primBroj==0):

$prim=true;

endif;

endfor;

if($prim==0):
echo " ".$prviBroj." ";
endif;

$prim=false;

endfor;

?>
</body>
</html>


