<?php


class UserController
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

   public function issetBtn($value)
   {
      return isset($_POST[$value]);
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

   public function userEdit()
   {
      $id    = $this->post('user_id');

      if ($this->issetBtn('btn-user-edit-table')) {
         $users = $this->UserModel->getId($id);
         $this->view('users/edit.php', ['users' => $users]);
      }

      if ($this->issetBtn('save-form-farmer')) {
         $lastName     = $this->post('last_name');
         $firstName    = $this->post('first_name');
         $middleName   = $this->post('middle_name');
         $email        = $this->post('email');
         $province     = $this->post('province');
         $barangay     = $this->post('barangay');
         $municipality = $this->post('municipality');
         $city         = $this->post('city');
         $password     = $this->post('password');

         $this->UserModel->editUser($lastName, $firstName, $middleName, $email, $password, $province, $barangay, $city, $municipality, $id);

         header("Location: ?route=user");
         exit;
      }
   }

   public function userDelete()
   {
      $id = $this->post('user_id');
      $this->UserModel->deleteUser($id);
      header("Location: ?route=user");
   }
}
