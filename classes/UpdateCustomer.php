<?php

use Classes\ConnexionDB;
use Classes\CheckForm;

class UpdateCustomer
{
    public function updateCustomer()
    {
        $checkForm = new CheckForm;

        global $dataBaseConnexion,$customer;

        $id = $customer['id'];

        $db = new connexionDB('localhost', 'root', 'qrulleau', 'project_management');

        $db->connexion();

        if (isset($_POST["submit"]))
        {
            $statusMsg = ''; 
            if (isset($_POST['name'], $_POST['notes']))
            {        
                $name = $_POST['name'];
                $name = $checkForm->checkInput($name);

                $notes = $_POST['notes'];
                $notes = $checkForm->checkInput($notes);

                $querie = ("UPDATE customer SET name = ?, notes = ? WHERE id = $id");
                $statement = $dataBaseConnexion->prepare($querie);
                $statement->execute(array($name,$notes));

                if ($querie)
                {
                    header('location: ../client.php');
                } else {
                    $statusMsg = "veuillez saisir des donnees correctes";
                }
            } else { 
            $statusMsg = 'test'; 
            }
        }
    }
}