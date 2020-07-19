<?php 
require_once 'config.php';
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nekretnine App</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/foundation.css">
<link rel="stylesheet" href="assets/css/form.css">
  </head>
  <body>

  <form action="autorization.php" method="POST">
    <div class="translucent-form-overlay">
        <h3>Register</h3>
    <div class="row columns">
<?php

    $p=isset($_GET['p']) ? (int)$_GET['p'] : 0;

    switch ($p) {
      case 1:
        echo 'Error: input parameters';
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
  </div>
    <div class="row columns">
      <label>E-mail
        <input type="text" name="email" id="email" placeholder="example@example.com">
      </label>
        </div>
    <div class="row columns">
      <label>Password
        <input type="text" name="password" id="pass" placeholder="Password">
      </label>
    </div>

    <button type="submit" class="primary button expanded search-button" style=" background-color: #8a8a8a;">
      Submit
    </button>
 </form>
    </div>


<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
</body>
</html>

