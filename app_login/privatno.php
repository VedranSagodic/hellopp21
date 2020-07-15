<?php 
require_once 'konfiguracija.php';

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
    <title>Edunova APP</title>
    <link rel="stylesheet" href="assets/css/foundation.css">
    <link rel="stylesheet" href="assets/css/tablica.css">
  </head>
<body>

<div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <a href="logout.php">Logout</a>
          <h1> Smjerovi</h1>
          <?php
          // READ IZ CRUD
          $izraz=$veza->prepare('select * from smjer');
          $izraz->execute();
          $rezultati=$izraz->fetchAll();
          //elog($rezultati);
          ?>

          <table class="table-expand">
            <thead>
              <tr class="table-expand-row">
                <th width="200">Naziv</th>
                <th class="text-right" width="150">Cijena</th>
                <th width="150">Verificiran</th>
              </tr>
            </thead>
            <tbody>
              <?php 

              foreach($rezultati as $red):
              ?>
              <tr class="table-expand-row" data-open-details>
                <td><?=$red->naziv; ?></td>
                <td class="text-right"><?php echo $red->cijena ?></td>
                <td><?php echo $red->verificiran ?> <span class="expand-icon"></span></td>
              </tr>
              <tr class="table-expand-row-content">
                <td colspan="3" class="table-expand-row-nested">
                  <p><?php echo $red->opis ?></p>
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
