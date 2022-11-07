<?php

require_once '../../autoloader.php';

use Classes\ConnexionDB;

global $dataBaseConnexion;

$db = new connexionDB('localhost', 'root', 'qrulleau', 'project_management');
$db->connexion();

$id = $_GET['id'];

$querie = 'DELETE FROM host where id = ?';
$statement = $dataBaseConnexion->prepare($querie);
$statement->execute(array($id));
header("location: ../host.php");