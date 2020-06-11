
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadaci</title>
</head>
<body>
<table border="1">
<?php

echo "<tr>";
echo "<td>" ;
echo $i=$_GET['b1'];
echo $j=$_GET['b2'];
echo $i + $j ;
echo "</td>" ;
echo "</tr>";

echo "<tr>";
echo "<td>";
echo$i=$_GET['b1'];
echo$j=$_GET['b2']; 
echo$i - $j ;
echo"</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo$i=$_GET['b1'];
echo$j=$_GET['b2'];
echo $i * $j ;
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo$i=$_GET['b1'];
echo$j=$_GET['b2'];
echo $i / $j;
echo  "</td>";
echo "</tr>";

echo "</table>";
?>
</table>
</body>
</html>
