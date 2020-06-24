<html>
	<head>
	<title>
	 Raspon prim brojeva u php
	 </title>
 </head>
<body>
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


