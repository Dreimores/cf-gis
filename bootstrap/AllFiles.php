<?php
session_start();
require 'config/Connection.php';

/**
 * MODELS FIRST
 */
$models = function (array $paths) {
  foreach ($paths as $path) {
    require BASE_PATH . '/models/' . $path;
  }
};

$models([
  'LoginModel.php',
  'UserModel.php',
]);

/**
 * CONTROLLERS AFTER
 */
$controllers = function (array $paths) {
  foreach ($paths as $path) {
    require BASE_PATH . '/controllers/' . $path;
  }
};

$controllers([
  'LoginController.php',
  'DashBoardController.php',
]);

$InstanceController = [
  'authLogin' => new LoginController(),
  'dashboard' => new DashBoardController(),
];
