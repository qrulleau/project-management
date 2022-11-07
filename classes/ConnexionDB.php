<?php

namespace Classes;

use PDO;
use PDOException;

class ConnexionDB {

    private static string $server = 'localhost';
    private static string $password = 'root';
    private static string $user = 'qrulleau';
    private static string $databaseName = 'project_management';

    public static function  connexion(): void
    {


      try {
        global $dataBaseConnexion;
        $dataBaseConnexion = new PDO('mysql:host=' . self::$server . ';dbname='. self::$databaseName . '', self::$user , self::$password);
      } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
      }
    }
}