<?php 
require_once 'config.php';
?>
<!doctype html>
<html lang="en">
  <head profile="https://polaznik13.edunova.hr/app_bootstrap.hr/index.php">
<link rel="icon" 
      type="image/png" 
      href="https://polaznik13.edunova.hr/fav-icon/fav-icon-16x16.png">
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Properties App</title>
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/form.css">
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/style.css">

    <link rel="apple-touch-icon" sizes="57x57" href="/fav-icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/fav-icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/fav-icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/fav-icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/fav-icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/fav-icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/fav-icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/fav-icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/fav-icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/fav-icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/fav-icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/fav-icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/fav-icon/favicon-16x16.png">
    <link rel="manifest" href="/fav-icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
  </head>
<body>

  <h2>Properties app</h2>
  <h4>
    <?php

$p=isset($_GET['p']) ? (int)$_GET['p'] : 0;

switch ($p) {
  case 1:
    echo 'Error: Input parameters';
    break;
  case 2:
    echo 'Please sign in with your e-mail and password';
    break;
  case 3:
    echo 'Wrong email and/or password.';
    break;
  default:
    echo 'Please sign in.';
    break;
}

?>
</h4>
<form  action="autorization.php" method="POST">
  <div class="form-group">
    <input type="email" id="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <input type="password" id="pass" name="password" class="form-control" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="https://github.com/VedranSagodic/hellopp21/tree/master/app_foundation.hr">Link na github kod</a>
</form>

<script src="bootstrap-4.5.0-dist/js/bootstrap.js"></script>
<script src="bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
</body>
</html>
