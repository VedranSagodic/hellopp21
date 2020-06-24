<?php $broj=isset($_GET['broj']) ? $_GET['broj'] : 12; ?>
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


<!--PREDAVANJE_03-->
<h1> PREDAVANJE 03</h1>
<p>
       <?php 
       //Sintaksu ćemo raditi pre PSR (https://www.php-fig.org/psr/)
       echo 'Hello world';
       ?>
    </p>
    <ul>
        <li>
            <a target="_blank" href="/php_osnove/echo.php">Echo naredba</a>
        </li>
        <li>
            <a target="_blank" href="/php_osnove/suzivot.php">Suživot PHP i HTML</a>
        </li>
        <li>
            <a target="_blank" href="/php_osnove/varijable.php">Varijable</a>
        </li>
        <li>
            <a target="_blank" href="/php_osnove/unosPodataka.php">Unos podataka</a>
        </li>
    </ul>


    <a target="_blank" href="/zadaci/zadatak1_03.php">zadatak 1</a>
    <a target="_blank" href="/zadaci/zadatak2_03.php">zadatak 2</a>
    <a target="_blank" href="/zadaci/zadatak3_03.php">zadatak 3</a>
<br>
<br>
<!--PREDAVANJE_04-->
<h1> PREDAVANJE 04</h1>
<ul>
<li>
<a target="_blank" href="/php_osnove/ugradeniNizovi.php">Ugrađeni nizovi</a>
</li>
<li>
<a target="_blank" href="/php_osnove/operatori.php">Operatori</a>
</li>
</ul>
    
    <hr />
    <?php echo $_SERVER['SERVER_ADDR']; ?>

    
<!--PREDAVANJE_05-->
<h1> PREDAVANJE 05</h1>
<ol>
        <li>
            <a href="/php_osnove/if.php">Uvjetno grananje if</a>
        </li>
        <li>
            <a href="/php_osnove/switch.php">Uvjetno grananje switch</a>
        </li>
        <li>
            <a href="/php_osnove/for.php">For petlja</a>
        </li>
    </ol>
<br>
<br>
    <a target="_blank" href="/zadaci/zadatak1_05.php">zadatak 1</a>
    <a target="_blank" href="/zadaci/zadatak2_05.php">zadatak 2</a>
    <a target="_blank" href="/zadaci/zadatak3_05.php">zadatak 3</a>
    <a target="_blank" href="/zadaci/zadatak4_05.php">zadatak 4</a>
    <a target="_blank" href="/zadaci/zadatak5_05.php">zadatak 5</a>
<!--PREDAVANJE_06-->

<h1> PREDAVANJE 06</h1>
<div class="grid-container">
<div class="grid-x grid-padding-x">
<?php

for($i=1;$i<=$broj;$i++){
if($i>40){
break;
}
include 'php_osnove/panel.php';
}

?>
</div>
</div>

<ul>
  <li>
    <a target="_blank" href="/php_osnove/while.php">While</a>
  </li>
  <li>
    <a target="_blank" href="/php_osnove/doWhile.php">Do while</a>
  </li>
  <li>
    <a target="_blank" href="/php_osnove/foreach.php">Foreach</a>
  </li>
</ul>

<br>
<br>


    <a target="_blank" href="/zadaci/zadatak1_06.php">zadatak 1</a>
    <a target="_blank" href="/zadaci/zadatak2_06.php">zadatak 2</a>
    <a target="_blank" href="/zadaci/zadatak3_06.php">zadatak 3</a>
    <a target="_blank" href="/zadaci/zadatak4_06.php">zadatak 4</a>
    <a target="_blank" href="/zadaci/zadatak5_06.php">zadatak 5</a>
    <a target="_blank" href="/zadaci/zadatak6_06.php">zadatak 6</a>
    <a target="_blank" href="/zadaci/zadaca.php">Zadaća prim brojevi</a>

<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
</body>
</html>
