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
    return $_POST[$value];
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
    $this->view('users/create.php');
  }

  public function userEdit()
  {
    $this->view('users/edit.php');
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
