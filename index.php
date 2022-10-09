<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style/main.css">
  <link rel="stylesheet" href="style/hamburger.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500;700&display=swap" rel="stylesheet"> 
</head>
<body>

  <?php
    require __DIR__ . '/component/header.php';  
  ?>

  <div class="d-flex align-start justify-start">
    <?php
      require __DIR__ . '/component/nav.php';  
    ?>
    <section class="content">
      <h2>Nouveau Projet</h2>
      <div class="background-content white">
          <div class="row">
            <div class="d-flex">
              <div class="col col-name">
                <h3>Nom</h3>
              </div>
              <div class="col col-customer">
                <h3>Client</h3>
              </div>
              <div class="col col-host">
                <h3>Hebergeur</h3>
              </div>
            </div>
          </div>
          <div class="row input">
            <div class="d-flex">
              <div class="col col-name">
                <input type="text">
              </div>
              <div class="col col-customer">
                <input type="text">
              </div>
              <div class="col col-host">
                <input type="text">
              </div>
            </div>
          </div>
          <div class="d-flex footer-content">
            <p>resultat page</p>
            <div class="d-flex">
              <a class="btn empty" href="">Exporter</a>
              <a class="btn" href="">Ajouter</a>
            </div>
          </div>
      </div>
    </section>
  </div>
  
</body>
</html>


