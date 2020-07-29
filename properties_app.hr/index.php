<?php 
require_once 'config.php';
?>
<!doctype html>
<html prefix="og: https://ogp.me/ns#">
<html lang="en">
  <head profile="https://polaznik13.edunova.hr/properties_app.hr/index.php">
<link rel="icon" 
      type="image/png" 
      href="https://polaznik13.edunova.hr/fav-icon/fav-icon-16x16.png">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge=1">
    <title>Properties App</title>

    <meta property="og:title" content="Properties App" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://polaznik13.edunova.hr/properties_app.hr/index.php" />

    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/queries.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;900&family=Lato:wght@300;400&display=swap" rel="stylesheet">

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
  <div class="row">
  <h1>Properties app</h1>

  <h3>
    <?php

$error=isset($_GET['error']) ? (int)$_GET['error'] : 0;

switch ($error) {
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
</h3>
</div>
<div class="form-row">
<form  class="form" action="autorization.php" method="POST">
  <div class="formObject">
    <label>E-mail:</label>
    <input type="email" id="email" name="email" class="formElement" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="formObject">
    <label>Password:</label>
    <input type="password" id="pass" name="password" class="formElement" placeholder="Password">
  </div>
  <button type="submit" class="button">Submit</button>
</form>
<a href="https://github.com/VedranSagodic/PropertiesApp-without-rwd">Link na github kod</a>
  </div>
</div>


</body>
</html>
