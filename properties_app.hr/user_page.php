<?php 
require_once 'config.php';

if(!isset($_SESSION['autoriziran'])){
  header('location: index.php');
}

?>

<!doctype html>
<html prefix="og: https://ogp.me/ns#">
<html lang="en">
  <head profile="https://polaznik13.edunova.hr/properties_app.hr/user_page.php">
<link rel="icon" 
      type="image/png" 
      href="https://polaznik13.edunova.hr/fav-icon/fav-icon-16x16.png">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge=1">
    <title>Properties App</title>

    <meta property="og:title" content="Properties App" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://polaznik13.edunova.hr/properties_app.hr/user_page.php" />

    <link rel="stylesheet" href="css/userPage.css">
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
<h1>Users</h1>

<?php
          // READ IZ CRUD
          $izraz=$veza->prepare('select * from users');
          $izraz->execute();
          $results=$izraz->fetchAll();
          ?>

          <div class="btn-row">
           <a class="button1" href="new_user.php">Add new user</a>
           <a class="button2" href = "https://polaznik13.edunova.hr/properties_app.hr/img/ER_dijagram_novo.JPG" target = "_self">ERA dijagram </a>
           <a class="button3" href="logout.php">Logout</a>
          </div>
          </div>
<table class="table">
  <thead>
    <tr class="tb-row">
      <th class="tb-col">Name</th>
      <th class="tb-col">Surname</th>
      <th class="tb-col">Password</th>
      <th class="tb-col">Email</th>
      <th class="tb-col">Phone</th>
      <th class="tb-col">Address</th>
      <th class="tb-col">Update/delete</th>
    </tr>
  </thead>
  <tbody>
  <?php 

foreach($results as $res):
?>
    <tr class="tb-row">
                <td  class="tb-data"><?= $res->name; ?></td>
                <td  class="tb-data"><?= $res->surname; ?></td>
                <td  class="tb-data"><?php echo $res->password; ?></td>
                <td  class="tb-data"><?php echo $res->e_mail; ?></td>
                <td  class="tb-data"><?php echo $res->phone; ?></td>
                <td  class="tb-data"><?php echo $res->address; ?></td>
                <td  class="tb-data">
                  <a class="button-update" href="update.php?id=<?php echo $res->id ?>">Update</a>
                  <a class="button-delete" href="delete.php?id=<?php echo $res->id ?>">Delete</a>
                </td>
     </tr>
  </tbody>
  <?php 
            endforeach;
              ?>
          </table>

</body>
</html>