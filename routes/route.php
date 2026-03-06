<?php

require BASE_PATH . '/bootstrap/AllFiles.php';

$route = $_GET['route'] ?? '';

switch ($route) {
  
  // Login routes
  case "":
    $InstanceController['authLogin']->login();
    break;
  case "auth-login":
    $InstanceController['authLogin']->authLogin();
    break;
  
  // Dashboard routes
  case "dashboard":
    $InstanceController['dashboard']->dashBoard();
    break;
  
  // User routes
  case "user":
    $InstanceController['user']->userManagement();
    break;
  case "user-create":
    $InstanceController['user']->userCreate();
    break;
  case "user-edit":
    $InstanceController['user']->userEdit();
    break;
  case "user-delete":
    $InstanceController['user']->userDelete();
    break;
  
  // Farm routes
  case "farm-info":
    $InstanceController['farmerInfo']->farmerInfo();
    break;

  // 404 page not found!
  default:
    $InstanceController['authLogin']->default();
    break;
}
