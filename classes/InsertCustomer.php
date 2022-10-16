<?php

require_once 'ConnexionDB.php';

class InsertCustomer {
    public function addCustomer () {
        global $dataBaseConnexion;

        $db = new connexionDB('localhost', 'root', 'qrulleau', 'project_management');

        $db->connexion();

        if (isset($_POST["submit"])){
            $statusMsg = ''; 
            if (isset($_POST['name'], $_POST['notes']))
            {        
                require 'CheckForm.php';
                $checkForm = new CheckForm;

                $name = $_POST['name'];
                $name = $checkForm->checkInput($name);
                
                $notes = $_POST['notes'];
                $notes = $checkForm->checkInput($notes);

                $querie = ('insert into customer (name, notes) VALUES (?,?)');
                $statement = $dataBaseConnexion->prepare($querie);
                $statement->execute(array($name,$notes));

                
                if ($querie) {
                    header("Location: ../index.php");
                } else {
                    $statusMsg = "Veuillez saisir des donnees correctes";
                }
            } else { 
            $statusMsg = 'test'; 
            }
        }
    }
}