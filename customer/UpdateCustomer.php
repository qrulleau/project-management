<?php

require_once '../classes/ConnexionDB.php';

class UpdateCustomer
{
    public function updateCustomer()
    {
        require '../classes/CheckForm.php';

        $checkForm = new CheckForm;

        global $dataBaseConnexion,$customer;

        $id = $customer['id'];

        $db = new connexionDB('localhost', 'root', '', 'project_management');

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

                $query = ("UPDATE customer SET name = ?, notes = ? WHERE id = $id");
                $statement = $dataBaseConnexion->prepare($query);
                $statement->execute(array($name,$notes));

                if ($query) {
                    header('location: ../client.php');
                } else {
                    $statusMsg = "Veuillez saisir des donnees correctes";
                }

            } else { 
                $statusMsg = 'test'; 
            }
        }
    }
}