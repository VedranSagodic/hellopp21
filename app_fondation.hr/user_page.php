<?php 
require_once 'config.php';

if(!isset($_SESSION['autoriziran'])){
  header('location: index.php');
}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nekretnine App</title>
    <link rel="stylesheet" href="assets/css/foundation.css">
    <link rel="stylesheet" href="assets/css/tablica.css">
  </head>
<body>



    <h1 class="header-title">
      Users
    </h1>
    <div class="large-6 cell">
        <a href="logout.php">Logout</a>
        </div>
        <?php
          // READ IZ CRUD
          $izraz=$veza->prepare('select * from users');
          $izraz->execute();
          $results=$izraz->fetchAll();
          ?>
           <a class="button" href="new_property.php">Add new user</a>
          <table class="table">
            <thead>
              <tr class="table" style="text-align:center;">
                <th width="200">Name</th>
                <th width="200">Surname</th>
                <th width="200">Password</th>
                <th width="200">E-mail</th>
                <th width="150">Phone</th>
                <th width="150">Address</th>
                <th width="150"></th>
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
                  <a class="button" href="update.php?id=<?php echo $res->id ?>">Update</a>
              </td>
              <td>
                  <a class="button" href="delete.php?id=<?php echo $res->id ?>">Delete</a>
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