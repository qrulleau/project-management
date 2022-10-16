<?php

require_once 'ConnexionDB.php';

$db = new connexionDB('localhost', '', 'root', 'project_management');

$db->connexion();

$query = $dataBaseConnexion->prepare("SELECT * FROM customer");
$query->execute();
$rep = $query->fetch();
$name_user = $rep['name'];
//var_dump($rep);

if (isset($_POST["submit"]))
{
    $statusMsg = ''; 
    if (isset($_POST['name'], $_POST['notes']))
    {        
        $name = $_POST['name'];
        $name = trim(htmlspecialchars(strtolower($name)));
        // $code = $_POST['name'];
        // $code = strtoupper($code);
        $notes = $_POST['notes'];
        $notes = trim(htmlspecialchars(strtolower($notes)));

        $query = $dataBaseConnexion->prepare("INSERT into customer (code, name, notes) VALUES (:code, :name, :notes)");

        // $query->bindParam(':id', '');
        $query->bindParam(':code', '');
        $query->bindParam(':name', $name);
        $query->bindParam(':notes', $notes);

        $query->execute();
        
        if ($query) {
            echo "<div class='success'>
                </div>";
            header(Location: '../index.php');
        } else {
            echo "Insert manqué";
        }
    }else{ 
        $statusMsg = ''; 
    }
}