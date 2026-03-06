<?php

class DashBoardController
{

  public function view($view, array $data = [])
  {
    extract($data);
    require __DIR__ . '/../views/' . $view;
  }

  public function dashBoard()
  {
    $this->view('dashboard/dashboard.php');
  }

  public function growerInfo()
  {
    $this->view('grower-info/index.php');
  }
}
