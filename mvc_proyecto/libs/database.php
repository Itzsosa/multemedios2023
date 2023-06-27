<?php

class Database
{
  private $host;

  private $user;

  private $password;

  private $dbname;

  private $charset;

  public function __construct()
  {
    $this->host = constant('HOST');
    $this->dbname = constant('DB');
    $this->user = constant('USER');
    $this->password = constant('PASSWORD');
    $this->charset = constant('CHARSET');
  }

  function connect()
  {
    try {
      //code...
      $connection = "mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charset=" . $this->charset;
      $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
      ];

      $pdo = new PDO($connection, $this->user, $this->password, $options);

      return $pdo;
    } catch (PDOException $e) {
      echo "Fail connect" . $e->getMessage();
    }
  }
}

?>