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
<h2>Update user</h2>
<div class="floated-label-wrapper">
<label for="name">Name</label>
<input type="text" id="name" name="name" value="<?php echo $user->name ?>">
</div>
<div class="floated-label-wrapper">
<label for="surname">Surname</label>
<input name="surname" id="surname" value="<?php echo $user->surname ?>"></input>
</div>
<div class="floated-label-wrapper">
<label for="password">Password</label>
<input type="text" id="password" name="password" value="<?php echo $user->password ?>">
</div>
<div class="floated-label-wrapper">
<label for="e_mail">E-mail</label>
<input type="e-mail" id="e_mail" name="e_mail" value="<?php echo $user->e_mail ?>">
</div>
<div class="floated-label-wrapper">
<label for="phone">Phone</label>
<input type="phone" id="phone" name="phone" value="<?php echo $user->phone ?>">
</div>
<div class="floated-label-wrapper">
<label for="address">Address</label>
<input type="address" id="address" name="address" value="<?php echo $user->address ?>">
</div>
<input type="hidden" name="id" value="<?php echo $user->id ?>">
<input class="button expanded" type="submit" value="Update user">
</form>

<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
</body>
</html>