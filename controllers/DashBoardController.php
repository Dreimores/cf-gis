<?php

class DashBoardController
{
  private $UserModel;

  public function __construct()
  {
    $this->UserModel = new UserModel();
  }

  public function view($view, array $data = [])
  {
    extract($data);
    require __DIR__ . '/../views/' . $view;
  }

  public function post($value)
  {
    return $_POST[$value] ?? '';
  }

  public function dashBoard()
  {
    $this->view('dashboard/dashboard.php');
  }

  public function userManagement()
  {
    $users = $this->UserModel->readUser();

    $this->view('users/index.php', ['users' => $users]);
  }

  public function userCreate()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $lastName     = $this->post('last_name');
      $firstName    = $this->post('first_name');
      $middleName   = $this->post('middle_name');
      $email        = $this->post('email');
      $province     = $this->post('province');
      $barangay     = $this->post('barangay');
      $municipality = $this->post('municipality');
      $city         = $this->post('city');
      $password     = $this->post('password');

      $this->UserModel->createUser($lastName, $firstName, $middleName, $email, $password, $province, $barangay, $city, $municipality);

      header("Location: ?route=user");
      exit;
    }

    $this->view('users/create.php');
  }

  public function userEdit()
  {
    $id    = $this->post('user_id');
    $users = $this->UserModel->editUser($id);
    $this->view('users/edit.php', ['users' => $users]);
  }

  public function farmerInfo()
  {
    $this->view('farm-info/index.php');
  }

  public function growerInfo()
  {
    $this->view('grower-info/index.php');
  }
}
