<?php $broj=isset($_GET['broj']) 

? $_GET['broj'] : 12; 

?>
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
<?php

while($broj-->0){
 include 'panel.php';
}

?>
</div>
</div>

<ul>
  <li>
    <a target="_blank" href="while.php">While</a>
  </li>
  <li>
    <a target="_blank" href="zadatak1.php">zadatak 1</a>
  </li>
</ul>

<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
</body>
</html>