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

    <h1> PREDAVANJE 07</h1>
    <table>
        <caption>Materijali 24.06.2020.</caption>
        <thead>
            <tr>
                <th>poveznica</th>
                <th>Naziv</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="/php_osnove/indeksniNizovi.php">X</a></td>
                    <td>Indeksni Nizovi</td>
            </tr>
            <tr>
                <td><a href="/php_osnove/asocijativniNizovi.php">X</a></td>
                    <td>Asocijativni nizovi</td>
            </tr>
            <tr>
                <td><a href="/php_osnove/koristenjeNizova.php">X</a></td>
                    <td>Korištenje nizoca</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">Gotovo</td>
            </tr>
        </tfoot>
    </table>
    <a target="_blank" href="/zadaci/zadatak1_07.php">zadatak 1</a>
    <a target="_blank" href="/zadaci/zadatak2_07.php">zadatak 2</a>
    <a target="_blank" href="/zadaci/zadatak3_07.php">zadatak 3</a>
    <a target="_blank" href="/zadaci/zadatak4_07.php">zadatak 4</a>
    <a target="_blank" href="/zadaci/zadatak5_07.php">zadatak 5</a>
    <a target="_blank" href="/zadaci/zadatak6_07.php">zadatak 6</a>
    <a target="_blank" href="/zadaci/zadatak7_07.php">zadatak 7</a>

    <h1> PREDAVANJE 08</h1>

    <ol>
        <li><a href="/php_osnove/include.php">Include</a></li>
        <li><a href="/php_osnove/require.php">Require</a></li>
        <li><a href="/php_osnove/funkcije.php">Funkcije</a></li>
    </ol>

    <a target="_blank" href="/zadaci/zadatak1_08.php">zadatak 1</a>
    <a target="_blank" href="/zadaci/zadatak2_08.php">zadatak 2</a>
    <a target="_blank" href="/zadaci/zadatak3_08.php">zadatak 3</a>
    <a target="_blank" href="/zadaci/zadatak4_08.php">zadatak 4</a>
    <a target="_blank" href="/zadaci/zadatak5_08.php">zadatak 5</a>
    <a target="_blank" href="/zadaci/zadatak6_08.php">zadatak 6</a>
    <a target="_blank" href="/zadaci/zadatak7_08.php">zadatak 7</a>


<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
</body>
</html>
