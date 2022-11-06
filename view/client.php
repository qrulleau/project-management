<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../autoloader.php';
require_once __DIR__ . '../../customer/InsertCustomer.php';
require_once __DIR__ . '../../customer/DisplayCustomers.php';
$displayCustomer = new DisplayCustomers;
$displayCustomer->displayAllCustomer();

$insertCustomer = new InsertCustomer;

$insertCustomer->addCustomer();

$page = "customer";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer page management</title>
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/hamburger.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500;700&display=swap" rel="stylesheet"> 
</head>
<body>

    <?php
    require __DIR__ . '../../component/header.php';  
    ?>

    <div class="d-flex align-start justify-start">
        <?php
        require __DIR__ . '../../component/nav.php';  
        ?>
        <section class="content">
            <h2>Nouveau client</h2>
            <div class="d-flex justify-start selector">
                <button class="selector-btn selector-btn-active" value="general-information">Informations générales</button>
                <button class="selector-btn " value="contact">Contacts</button>
            </div>
            <div class="background-content white new-width1">
                <section id="general-information" class="content-section active-content">
                    <form method="POST">
                        <div class="d-flex justify-start align-start">
                            <div class="label">
                                <label>Nom <span>*</span></label>
                            </div>
                            <input type="text" name="name" placeholder="Nom">
                        </div>
                        <div class="d-flex justify-start align-start">
                            <div class="label">
                                <label for="Name">Code interne</label>
                            </div>
                            <input type="text" name="code" disabled placeholder="Champ généré automatiquement">
                        </div>
                        <div class="d-flex justify-start align-start">
                            <div class="label">
                                <label for="Name">Notes / remarques</label>
                            </div>
                            <textarea name="notes" id="notes" cols="30" rows="10"></textarea>
                        </div>
                        <button type='submit' class='btn' name='submit'>Ajouter</button>
                    </form>
                </section>
                <section id="contact" class="content-section">

                    <?php
                    foreach ($customers as $customer) {       
                    ?>

                    <div class="contact">
                        <div class="d-flex header-contact">
                            <h3><?php echo $customer['name']?></h3>
                            <div class="d-flex action">
                                <?php
                                echo "<a href='../vue/updateCustomer/updateCustomer.php?id=" . $customer['id'] . "' class='d-flex update'>"
                                ?>
                                    <div class="d-flex"><i data-feather="edit-3"></i>Modifier</div>
                                </a>
                                <a href="#" class="delete">
                                    <div class="d-flex"><i data-feather="trash"></i>Supprimer</div>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-start">
                            <div class="d-flex direction-column">
                                <div class="d-flex">
                                    <div class="label">
                                        <label>Nom du client<span>*</span></label>
                                    </div>
                                    <input type="text" value="<?php echo $customer['name']?>">
                                </div>
                            </div>
                            <div class="d-flex direction-column">
                                <div class="d-flex">
                                    <div class="label">
                                        <label>Code</label>
                                    </div>
                                    <input type="text" value="<?php echo $customer['code']?>">
                                </div>
                                <div class="d-flex">
                                    <div class="label">
                                        <label>Notes</label>
                                    </div>
                                    <input type="text" value="<?php echo $customer['notes']?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php
                        }
                    ?>
                    
                    <a href="#" class="add">
                        <div class="d-flex justify-start">
                            <i data-feather="plus"></i>Ajouter un contact
                        </div>
                    </a>
                </section>
                <div class="d-flex footer-content justify-end">
                    <div class="d-flex">
                        <a class="btn empty" href="">Annuler</a>
                        <a class="btn" href="">Ajouter</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>feather.replace()</script>
    <script src="../script/main.js"></script>
</body>
</html>