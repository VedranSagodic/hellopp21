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
<html prefix="og: https://ogp.me/ns#">
<html class="no-js" lang="en">
<head profile="https://polaznik13.edunova.hr/properties_app.hr/new_user.php">
<link rel="icon" 
      type="image/png" 
      href="https://polaznik13.edunova.hr/fav-icon/fav-icon-16x16.png">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge=1">
    <title>Properties app</title>

    <meta property="og:title" content="Properties App" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://polaznik13.edunova.hr/properties_app.hr/new_user.php" />

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/newUser.css">
    <link rel="stylesheet" href="css/queries.css">

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
<h1>Add User</h1>
    <div>
        <a class="btn-back" href="user_page.php">Back to user page</a>
    </div>
</div>
<div class="form-row">
<form class="form" method="POST">
    <div class="formObject">
<label>Name:</label>
      <input class="formElement" type="text" id="name" name="name" placeholder="Set user Name" required>
  </div>
  <div class="formObject">
  <label>Surname:</label>
      <input class="formElement" type="text" id="surname" name="surname" placeholder=" Set user Surname" required>
  </div>
  <div class="formObject">
  <label>Password:</label>
      <input class="formElement" type="text" id="password" name="password"  placeholder="Set user Password" required>
  </div>
  <div class="formObject">
  <label>E-mail:</label>
      <input class="formElement" type="e-mail" id="e_mail" name="e_mail"  placeholder="Set user E-mail" required>
  </div>
  <div class="formObject">
  <label>Phone:</label>
      <input class="formElement" type="number" id="phone" name="phone" placeholder="Set user Phone number" required>
  </div>
  <div class="formObject">
  <label>Address:</label>
      <input class="formElement" type="text" id="address" name="address" placeholder="Set user Address" required>
  </div>
  <button type="submit" class="btn-submit">Submit</button>
  </div>
</form>
</div>
</body>
</html>