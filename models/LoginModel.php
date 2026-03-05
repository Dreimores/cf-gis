<?php

class LoginModel extends Connection
{

  # initialize the connection
  public function __construct()
  {
    parent::__construct();
  }
  # end 
  
  public function authLogin($username, $password)
  {
    $stmt = $this->getConnection()->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $stmt->execute([$username, $password]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}