<?php
// zadatak1.php
// stranica prima dva brojčana parametra pod ključevima
// b1 i b2. Program ispisuje u tabličnoj formi sljedeće podatke
// zbroj, razliku, umnožak i kvocijent
// mora biti dostupno na 
// https://polaznikXX.edunova.hr/zadatak1.php?b1=2&b2=3


// zadatak2.php
// stranica prima tri parametra pod ključevima
// naziv, adresa i mjesto. Program označava vrijednost pod 
// nazivom s h1 oznakom, vrijednost adresa s address oznakom
// te vrijednost mjesto s span oznakom.
// sve tri vrijednosti prikazane su vizualno jedne pokraj drugih
// https://polaznikXX.edunova.hr/zadatak1.php?b1=2&b2=3
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$i=$_GET['b1'];
$j=$_GET['b2'];
?>
<table>
    <tr>
    <td style="border: 2px solid;">
    <?php echo $i + $j;?>
    </td>
</tr>
<tr>
<td style="border: 2px solid;">
    <?php echo $i - $j;?>
    </td>
</tr>
<tr>
<td style="border: 2px solid;">
    <?php echo $i * $j;?>
    </td>
</tr>
<tr>
<td style="border: 2px solid;">
    <?php echo $i / $j;?>
    </td>
</tr>
</table>
<?php
$i=$_GET['naziv'];
$j=$_GET['adresa'];
$k=$_GET['mjesto'];
?>

<h1><?php echo $i?></h1>
<address><?php echo $j?></address>
<span><?php echo $k?></span>


</body>
</html>
