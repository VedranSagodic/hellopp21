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
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nekretnine app</title>
<link rel="stylesheet" href="assets/css/foundation.css">
</head>
<body>

<form class="callout" method="POST">
<h2>Add User</h2>
<div class="floated-label-wrapper">
<label for="name">Name</label>
<input type="text" id="name" name="name">
</div>
<div class="floated-label-wrapper">
<label for="surname">Surname</label>
<input type="text" id="surname" name="surname">
</div>
<div class="floated-label-wrapper">
<label for="password">Password</label>
<input type="password" id="password" name="password">
</div>
<div class="floated-label-wrapper">
<label for="e_mail">E-mail</label>
<input type="text" id="e_mail" name="e_mail">
</div>
<div class="floated-label-wrapper">
<label for="phone">Phone</label>
<input type="number" id="phone" name="phone">
</div>
<div class="floated-label-wrapper">
<label for="address">Address</label>
<input type="text" id="address" name="address">
</div>

<input class="button expanded" type="submit" value="Add new user">
</form>

<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
</body>
</html>