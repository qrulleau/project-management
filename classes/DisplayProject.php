<?php

namespace Classes;

use Classes\ConnexionDB;

class DisplayProject
{    
    public function displayAllProject()
    {   
        global $dataBaseConnexion,$projects;
        
        $db = new connexionDB('localhost', 'root', 'qrulleau', 'project_management');
        $db->connexion();
        
        $query = $dataBaseConnexion->prepare("SELECT * FROM project");
        $query->execute();
        $projects = $query->fetchAll();
    }
    
    public function displayProject()
    {
        global $dataBaseConnexion,$project;

        $id = $_GET['id'];
        
        $db = new connexionDB('localhost', 'root', 'qrulleau', 'project_management');
        $db->connexion();
        
        $query = $dataBaseConnexion->prepare("SELECT * FROM project where id = ?");
        $query->execute(array($id));
        $project = $query->fetch();
    }
}