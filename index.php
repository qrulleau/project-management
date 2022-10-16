<?php
    $page = "home";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>host page management</title>
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
            <h2>Nouvel hebergeur</h2>
            <div class="d-flex justify-start selector">
              <button class="selector-btn selector-btn-active" value="general-information">Informations generales</button>
              <button class="selector-btn " value="contact">Contacts</button>
            </div>
            <div class="background-content white new-width1">
              <section id="general-information" class="content-section active-content">
                <form action="">
                  <div class="d-flex justify-start align-start">
                    <div class="label">
                      <label>Nom <span>*</span></label>
                    </div>
                    <input type="text" placeholder="nom*">
                  </div>
                  <div class="d-flex justify-start align-start">
                    <div class="label">
                      <label for="Nom">Code interne</label>
                    </div>
                    <input type="text" placeholder="nom*">
                  </div>
                  <div class="d-flex justify-start align-start">
                    <div class="label">
                      <label for="Nom">Note / remarques</label>
                    </div>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                  </div>
                </form>
              </section>
              <section id="contact" class="content-section ">
                <div class="contact">
                  <div class="d-flex header-contact">
                    <h3>Thibault Tremel</h3>
                    <a href="#" class="delete">
                      <div class="d-flex"><i data-feather="trash"></i>Supprimer</div>
                    </a>    
                  </div>
                  <div class="d-flex">
                      <div class="d-flex direction-column">
                        <div class="d-flex">
                          <div class="label">
                            <label>Nom du contact<span>*</span></label>
                          </div>
                          <input type="text">
                        </div>
                        <div class="d-flex">
                          <div class="label">
                            <label>Email</label>
                          </div>
                          <input type="text">
                        </div>
                    </div>
                    <div class="d-flex direction-column">
                        <div class="d-flex">
                          <div class="label">
                            <label>Role</label>
                          </div>
                          <input type="text">
                        </div>
                        <div class="d-flex">
                          <div class="label">
                            <label>Telephone</label>
                          </div>
                          <input type="text">
                        </div>
                    </div>
                    </div>
                </div>
                <div class="contact">
                  <div class="d-flex header-contact">
                    <h3>Thibault Tremel</h3>
                    <a href="#" class="delete">
                      <div class="d-flex"><i data-feather="trash"></i>Supprimer</div>
                    </a>    
                  </div>
                  <div class="d-flex">
                      <div class="d-flex direction-column">
                        <div class="d-flex">
                          <div class="label">
                            <label>Nom du contact<span>*</span></label>
                          </div>
                          <input type="text">
                        </div>
                        <div class="d-flex">
                          <div class="label">
                            <label>Email</label>
                          </div>
                          <input type="text">
                        </div>
                    </div>
                    <div class="d-flex direction-column">
                        <div class="d-flex">
                          <div class="label">
                            <label>Role</label>
                          </div>
                          <input type="text">
                        </div>
                        <div class="d-flex">
                          <div class="label">
                            <label>Telephone</label>
                          </div>
                          <input type="text">
                        </div>
                    </div>
                    </div>
                </div>
                <a href="#" class="add">
                  <div class="d-flex justify-start">
                    <i data-feather="plus"></i>Ajouter un contact
                  </div>
                </a>
              </section>
              <div class="d-flex footer-content justify-end">
                  <div class="d-flex">
                      <a class="btn empty" href="">Exporter</a>
                      <a class="btn" href="">Ajouter</a>
                  </div>
              </div>
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>feather.replace()</script>
    <script src="script/main.js"></script>
</body>
</html>


