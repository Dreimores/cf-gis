<?php

class UserModel extends Connection
{

  # initialize the connection
  public function __construct()
  {
    parent::__construct();
  }
  # end 

  public function readUser()
  {
    $stmt = $this->getConnection()->prepare("SELECT *, CONCAT(first_name, ' ', LEFT(middle_name, 1), '. ', last_name) AS full_name FROM users ORDER BY first_name ASC");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
