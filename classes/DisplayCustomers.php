<?php

require_once 'ConnexionDB.php';

class DisplayCustomers {
    
    public function displayAllCustomer(){
        
        global $dataBaseConnexion,$customers;
        
        $db = new connexionDB('localhost', 'root', 'qrulleau', 'project_management');
        $db->connexion();
        
        $query = $dataBaseConnexion->prepare("SELECT * FROM customer");
        $query->execute();
        $customers = $query->fetchAll();
        
    }
    
    public function displayCustomer(){
        global $dataBaseConnexion,$customer;

        $id = $_GET['id'];
        
        $db = new connexionDB('localhost', 'root', 'qrulleau', 'project_management');
        $db->connexion();
        
        $query = $dataBaseConnexion->prepare("SELECT * FROM customer where id = ?");
        $query->execute(array($id));
        $customer = $query->fetch();
        
    }
}