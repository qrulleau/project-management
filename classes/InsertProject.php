<?php

namespace Classes;

use Classes\ConnexionDB;
use Classes\CheckForm;

class InsertProject {
    public function addProject () {
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

                $customer_id = $_POST['customer_id'];
                $customer_id = $checkForm->checkInput($customer_id);


                $host_id = $_POST['host_id'];
                $host_id = $checkForm->checkInput($host_id);

                $lastPass = $_POST['lastPass'];
                $lastPass = $checkForm->checkInput($lastPass);

                $sketchLink = $_POST['sketchLink'];
                $sketchLink = $checkForm->checkInput($sketchLink);

                $querie = ('insert into project (name, notes, customer_id, host_id, lastpass_folder, link_mock_ups) VALUES (?,?,?,?,?,?)');
                $statement = $dataBaseConnexion->prepare($querie);
                $statement->execute(array($name, $notes, $customer_id, $host_id, $lastPass, $sketchLink));

                
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