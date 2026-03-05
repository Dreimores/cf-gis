<?php
class LoginController
{
  private $LoginModel;

  public function __construct()
  {
    $this->LoginModel = new LoginModel();
  }

  private function view($view)
  {
    require __DIR__ . '/../views/' . $view;
  }

  private function post($key)
  {
    return $_POST[$key] ?? '';
  }

  public function flash($key, $value = null)
  {

    if ($value !== null) {
      $_SESSION['flash'][$key] = $value;
      return;
    }

    $message = $_SESSION['flash'][$key] ?? null;

    unset($_SESSION['flash'][$key]);

    return $message;
  }

  public function headers($uri)
  {
    return header("Location:" . $uri);
  }

  public function login()
  {
    $this->view('login/login.php');
  }

  public function authLogin()
  {
    $userName = $this->post('email');
    $password = $this->post('password');

    $this->flash('old_email', $userName);

    if (empty($userName)) {
      $this->flash('error_username', 'User name is required.');
      $this->headers("?route=");
      exit;
    }

    if (empty($password)) {
      $this->flash('error_password', 'Password is required.');
      $this->headers("?route=");
      exit;
    }

    if ($this->LoginModel->authLogin($userName, $password)) {
      $_SESSION['username'] = $userName;
      $this->headers("?route=dashboard");
      exit;
    }

    $this->flash('error', 'Incorrect Username or Password.');
    $this->headers("?route=");
    exit;
  }

  public function default()
  {
    $this->view('login/404.html');
  }
}
