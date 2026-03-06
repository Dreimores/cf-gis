<?php

class FarmInfoController
{
   private $FarmInfoModel;

   public function __construct()
   {
      $this->FarmInfoModel = new FarmInfoModel();
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

   public function farmerInfo()
   {
      $farmers = $this->FarmInfoModel->readFarmInfo();

      $this->view('farm-info/index.php', ['farmers' => $farmers]);
   }

   public function farmInfoCreate()
   {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {

         $lastName     = $this->post('last_name');
         $this->FarmInfoModel->createFarmInfo();

         header("Location: ?route=user");
         exit;
      }

      $this->view('users/create.php');
   }
}
