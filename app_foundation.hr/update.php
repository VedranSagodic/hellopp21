<?php
require_once 'config.php';

if(!isset($_SESSION['autoriziran'])){
  header('location: index.php');
}

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
<html class="no-js" lang="en">
<html prefix="og: https://ogp.me/ns#">
<head profile="https://polaznik13.edunova.hr/app_foundation.hr/update.php">
<link rel="icon" 
      type="image/png" 
      href="https://polaznik13.edunova.hr/fav-icon/fav-icon-16x16.png">
<meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Properties app</title>

    <meta property="og:title" content="Properties App" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://polaznik13.edunova.hr/app_foundation.hr/update.php" />

    <link rel="stylesheet" href="assets/css/foundation.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/update.css">

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

<div class="translucent-form-overlay">
  <form method="POST">
    <h3>Update User</h3>
    <a class="button" href="user_page.php">Back to user page</a>
    <div class="row columns">
      <label>Name
      <input type="text" id="name" name="name" value="<?php echo $user->name ?>">
      </label>
    </div>
    <div class="row columns">
      <label>Surname
      <input type="text" name="surname" id="surname" value="<?php echo $user->surname ?>"></input>
      </label>
    </div>
    <div class="row columns">
      <label>Password
      <input type="text" id="password" name="password" value="<?php echo $user->password ?>">
      </label>
    </div>
    <div class="row columns">
      <label>E-mail
      <input type="text" id="e_mail" name="e_mail" value="<?php echo $user->e_mail ?>">
      </label>
    </div>
    <div class="row columns">
      <label>Phone</label>
      <input type="number" id="phone" name="phone" value="<?php echo $user->phone ?>">
      </label>
      </div>
      <div class="row columns">
      <label>Address</label>
      <input type="text" id="address" name="address" value="<?php echo $user->address ?>">
      </label>
      <input type="hidden" name="id" value="<?php echo $user->id ?>">
      <input class="button expanded" type="submit" value="Update user">
 </form>
</div>


<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
</body>
</html>