<?php 
require_once 'config.php';

if(!isset($_SESSION['autoriziran'])){
  header('location: index.php');
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
    <title>Nekretnine App</title>
    <link rel="stylesheet" href="assets/css/foundation.css">
    <link rel="stylesheet" href="assets/css/tablica.css">
    <link rel="stylesheet" href="assets/css/style.css">

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

    <div class="large-6 cell">
    <h1 class="header-title">
      Users
    </h1>
        <?php
          // READ IZ CRUD
          $izraz=$veza->prepare('select * from users');
          $izraz->execute();
          $results=$izraz->fetchAll();
          ?>
           <a class="button success" href="new_user.php">Add new user</a>
           <a class="button" href = "https://polaznik13.edunova.hr/app_foundation.hr/img/ER_dijagram_novo.JPG" target = "_self">ERA dijagram </a>
           <a class="button alert" href="logout.php">Logout</a>
          <table class="table">
            <thead>
              <tr class="table-head">
                <th>Name</th>
                <th>Surname</th>
                <th>Password</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Update/Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php 

              foreach($results as $res):
              ?>
              <tr class="table-row">
                <td><?= $res->name; ?></td>
                <td><?= $res->surname; ?></td>
                <td><?php echo $res->password; ?></td>
                <td><?php echo $res->e_mail; ?></td>
                <td><?php echo $res->phone; ?></td>
                <td><?php echo $res->address; ?></td>
                <td>
                  <a class="button success" href="update.php?id=<?php echo $res->id ?>">Update</a>
              </td>
              <td>
                  <a class="button alert" href="delete.php?id=<?php echo $res->id ?>">Delete</a>
                  </td>
                  </tr>
     
            </tbody>

            <?php 
            endforeach;
              ?>
          </table>
          </div>
      </div>
</div>

<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>