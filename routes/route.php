<?php

require BASE_PATH . '/bootstrap/AllFiles.php';

$route = $_GET['route'] ?? '';

switch ($route) {
  case "":
    $InstanceController['authLogin']->login();
    break;

  case "auth-login":
    $InstanceController['authLogin']->authLogin();
    break;
  case "dashboard":
    $InstanceController['dashboard']->dashBoard();
    break;
  case "user":
    $InstanceController['dashboard']->userManagement();
    break;
  case "farm-info":
    $InstanceController['dashboard']->farmerInfo();
    break;
  case "grows-info":
    $InstanceController['dashboard']->growerInfo();
    break;
  case "user-create":
    $InstanceController['dashboard']->userCreate();
    break;
  case "user-edit":
    $InstanceController['dashboard']->userEdit();
    break;
  default:
    $InstanceController['authLogin']->default();
    break;
}
