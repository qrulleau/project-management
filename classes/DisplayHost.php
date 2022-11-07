<?php

namespace Classes;

use Classes\ConnexionDB;

class DisplayHost {
    
    public function displayAllHost(){
        
        global $dataBaseConnexion,$hosts;
        
        $db = new connexionDB('localhost', 'root', 'qrulleau', 'project_management');
        $db->connexion();
        
        $query = $dataBaseConnexion->prepare("SELECT * FROM host");
        $query->execute();
        $hosts = $query->fetchAll();
        
    }
    
    public function displayHost(){
        global $dataBaseConnexion,$host;

        $id = $_GET['id'];
        
        $db = new connexionDB('localhost', 'root', 'qrulleau', 'project_management');
        $db->connexion();
        
        $query = $dataBaseConnexion->prepare("SELECT * FROM host where id = ?");
        $query->execute(array($id));
        $host = $query->fetch();
        
    }
}