<?php 
require_once 'config.php';

if(!isset($_SESSION['autoriziran'])){
  header('location: index.php');
}

?>

<!doctype html>
<html lang="en">
  <head profile="https://polaznik13.edunova.hr/app_foundation.hr/index.php">
<link rel="icon" 
      type="image/png" 
      href="https://polaznik13.edunova.hr/fav-icon/fav-icon-16x16.png">
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Properties App</title>
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/userPage.css">
    

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
<h2>Users</h2>

<?php
          // READ IZ CRUD
          $izraz=$veza->prepare('select * from users');
          $izraz->execute();
          $results=$izraz->fetchAll();
          ?>
          <div class="buttons">
           <a class="btn btn-outline-success btn-lg" href="new_user.php">Add new user</a>
           <a class="btn btn-outline-info btn-lg" href = "https://polaznik13.edunova.hr/app_bootstrap.hr/img/ER_dijagram_novo.JPG" target = "_self">ERA dijagram </a>
           <a class="btn btn-outline-danger btn-lg" href="logout.php">Logout</a>
          </div>
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Password</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Update/delete</th>
    </tr>
  </thead>
  <tbody>
  <?php 

foreach($results as $res):
?>
    <tr>
                <td><?= $res->name; ?></td>
                <td><?= $res->surname; ?></td>
                <td><?php echo $res->password; ?></td>
                <td><?php echo $res->e_mail; ?></td>
                <td><?php echo $res->phone; ?></td>
                <td><?php echo $res->address; ?></td>
                <td>
                  <a class="btn btn-primary btn-sm" href="update.php?id=<?php echo $res->id ?>">Update</a>
                  <a class="btn btn-outline-danger btn-sm" href="delete.php?id=<?php echo $res->id ?>">Delete</a>
                </td>
     </tr>
  </tbody>
  <?php 
            endforeach;
              ?>
          </table>
  


<script src="bootstrap-4.5.0-dist/js/bootstrap.js"></script>
<script src="bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
</body>
</html>