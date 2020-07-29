<?php
require_once 'config.php';

if(isset($_POST['name'])){


$izraz=$veza->prepare('update users set
name=:name,
surname=:surname,
password=:password,
e_mail=:e_mail,
phone=:phone,
address=:address
where id=:id');
$izraz->execute($_POST);
header('location: user_page.php');
}

if(isset($_GET['id'])){
$izraz=$veza->prepare('select * from users where id=:id');
$izraz->execute($_GET);
$user=$izraz->fetch();
}

?>
<!doctype html>
<html prefix="og: https://ogp.me/ns#">
<html class="no-js" lang="en">
<head profile="https://polaznik13.edunova.hr/properties_app.hr/update.php">
<link rel="icon" 
      type="image/png" 
      href="https://polaznik13.edunova.hr/fav-icon/fav-icon-16x16.png">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge=1">
    <title>Properties app</title>

    <meta property="og:title" content="Properties App" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://polaznik13.edunova.hr/properties_app.hr/update.php" />

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/update.css">
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

<h1>Update User</h1>
<a class="btn-back" href="user_page.php">Back to user page</a>

<form class="form"method="POST">

<div class="formObject">
<label>Name:</label>
      <input class="formElement" type="text" id="name" name="name" value="<?php echo $user->name ?>">
  </div>
  <div class="formObject">
  <label>Surname:</label>
      <input class="formElement" type="text" name="surname" id="surname" value="<?php echo $user->surname ?>"></input>
  </div>
  <div class="formObject">
  <label>Password:</label>
      <input class="formElement" type="text" id="password" name="password" value="<?php echo $user->password ?>">
  </div>
  <div class="formObject">
  <label>E-mail:</label>
      <input class="formElement" type="text" id="e_mail" name="e_mail" value="<?php echo $user->e_mail ?>">
  </div>
  <div class="formObject">
  <label>Phone:</label>
      <input class="formElement" type="number" id="phone" name="phone" value="<?php echo $user->phone ?>">
  </div>
  <div class="formObject">
  <label>Address:</label>
       <input class="formElement" type="text" id="address" name="address" value="<?php echo $user->address ?>">
  </div>
  <input type="hidden" name="id" value="<?php echo $user->id ?>"> 
  <button type="submit" class="btn-submit">Submit</button>
  </div>
</form>

</body>
</html>