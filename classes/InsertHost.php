<?php

namespace Classes;

use Classes\ConnexionDB;
use Classes\CheckForm;

class InsertHost {
    public function addHost () {
        global $dataBaseConnexion,$statusMsg;

        $db = new connexionDB('localhost', 'root', 'qrulleau', 'project_management');

        $db->connexion();

        if (isset($_POST["submit"])){
            $statusMsg = ''; 
            if (isset($_POST['name'], $_POST['notes']))
            {        
                $checkForm = new CheckForm;

                $name = $_POST['name'];
                $name = $checkForm->checkInput($name);
                
                $notes = $_POST['notes'];
                $notes = $checkForm->checkInput($notes);


                $querie = ('insert into host (name, notes) VALUES (?,?)');
                $statement = $dataBaseConnexion->prepare($querie);
                $statement->execute(array($name, $notes));

                
                if ($querie) {
                    header("Location: host.php");
                } else {
                    $statusMsg = "Veuillez saisir des donnees correctes";
                }
            } else { 
            $statusMsg = 'test'; 
            }
        }
    }
}