<?php

class ConnexionDB {

    private string $server;
    private string $password;
    private string $user;
    private string $databaseName;

    public function __construct(string $server,string $password,string $user,string $databaseName)
    {
      $this->server = $server;
      $this->password = $password;
      $this->user = $user;
      $this->databaseName = $databaseName;
    }

    public function connexion(): PDO
    {
      return $dbh = new PDO('mysql:host=' . $this->server . ';dbname='.$this->databaseName. '', $this->user, $this->password);
    }
}