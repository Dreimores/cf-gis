<?php

class UserModel extends Connection
{

  public function __construct()
  {
    parent::__construct();
  }

  public function readUser()
  {
    $stmt = $this->getConnection()->prepare("SELECT *, CONCAT(first_name, ' ', IF(middle_name IS NOT NULL AND middle_name != '', CONCAT(LEFT(middle_name, 1), '. '), ''), last_name) AS full_name FROM users ORDER BY first_name ASC");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function createUser(string $lastName, string $firstName, string $middleName, string $email, string $password, string $province, string $barangay, string $city, string $municipality)
  {
    $stmt = $this->getConnection()->prepare("INSERT INTO users (last_name, first_name, middle_name, email, password, province, barangay, city, municipal) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$lastName, $firstName, $middleName, $email, $password, $province, $barangay, $city, $municipality]);
    return $this->getConnection()->lastInsertId();
  }

  public function getId($id)
  {
    $stmt = $this->getConnection()->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function editUser(string $lastName, string $firstName, string $middleName, string $email, string $password, string $province, string $barangay, string $city, string $municipality, $id)
  {
    $stmt = $this->getConnection()->prepare("UPDATE users SET last_name = ?, first_name = ?, middle_name = ?, email = ?, password = ?, province = ?, barangay = ?, city = ?, municipal = ? WHERE id = ?");
    $stmt->execute([$lastName,$firstName,$middleName,$email,$password,$province,$barangay,$city,$municipality,$id]);
  }

  public function deleteUser($id)
  {
    $stmt = $this->getConnection()->prepare("DELETE FROM users WHERE id = ?");
    $stmt->execute([$id]);
  }
}
