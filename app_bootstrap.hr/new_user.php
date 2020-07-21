<?php
if(isset($_POST['name'])){
  require_once 'config.php';

  //elog($_POST);

  $izraz=$veza->prepare ('insert into users (name, surname, password, e_mail, phone, address) 
  values (:name, :surname, :password, :e_mail, :phone, :address)');
  $izraz->execute($_POST);
  header('location: user_page.php');
}
?>
<!doctype html>
<html class="no-js" lang="en">
<head profile="https://polaznik13.edunova.hr/app_foundation.hr/index.php">
<link rel="icon" 
      type="image/png" 
      href="https://polaznik13.edunova.hr/fav-icon/fav-icon-16x16.png">
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nekretnine app</title>
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/style.css">
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/newUser.css">

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


<form method="POST">
<div class="form-group">
  <h2>Add User</h2>
    <a class="btn btn-primary btn-sm" href="user_page.php">Back to user page</a>
<div class="form-group">
<label>Name:</label>
      <input type="text" id="name" name="name" placeholder="Set user Name">
  </div>
  <div class="form-group">
  <label>Surname:</label>
      <input type="text" id="surname" name="surname" placeholder=" Set user Surname">
  </div>
  <div class="form-group">
  <label>Password:</label>
      <input type="text" id="password" name="password"  placeholder="Set user Password">
  </div>
  <div class="form-group">
  <label>E-mail:</label>
      <input type="e-mail" id="e_mail" name="e_mail"  placeholder="Set user E-mail">
  </div>
  <div class="form-group">
  <label>Phone:</label>
      <input type="number" id="phone" name="phone" placeholder="Set user Phone number">
  </div>
  <div class="form-group">
  <label>Address:</label>
      <input type="text" id="address" name="address" placeholder="Set user Address">
  </div>
  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
  </div>
</form>

<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
</body>
</html>