<?php

require_once 'ConnexionDB.php';

class InsertCustomer
{
    public function addCustomer()
    {
        global $dataBaseConnexion;

        $db = new connexionDB('localhost', '', 'root', 'project_management');

        $db->connexion();

        if (isset($_POST["submit"]))
        {
            $statusMsg = ''; 
            if (isset($_POST['name'], $_POST['notes']))
            {        
                require 'CheckForm.php';
                $checkForm = new CheckForm;

                $name = $_POST['name'];
                $name = $checkForm->checkInput($name);
                
                $notes = $_POST['notes'];
                $notes = $checkForm->checkInput($notes);

                $query = ('insert into customer (name, notes) VALUES (?,?)');
                $statement = $dataBaseConnexion->prepare($query);
                $statement->execute(array($name,$notes));

                if ($query)
                {
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