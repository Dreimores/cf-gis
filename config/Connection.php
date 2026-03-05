<?php

class Connection
{
  private $connection;

  public function __construct()
  {
    $server_name = "127.0.0.1";
    $db_name     = "cfgis";
    $db_username = "root";
    $db_password = "";
    $port        = 3308;

    try {

      $dsn = "mysql:host=$server_name;port=$port;dbname=$db_name;charset=utf8mb4";
      $this->connection = new PDO($dsn, $db_username, $db_password);
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
      die("Connection failed: " . $e->getMessage());
    }
  }
  
  public function getConnection()
  {
    return $this->connection;
  }
}
