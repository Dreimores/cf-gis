<?php
include('./components/header.php');
include('./components/navbar.php');
?>
<div class="container-fluid px-4">
  <h1 class="mt-4"> Users </h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">List of users</li>
  </ol>
  <div class="card mb-4">
    <div class="card-header d-flex justify-content-between">
      <div>
        <i class="fas fa-table me-1"></i>
        Records
      </div>
      <a href="?route=user-create" class="btn btn-dark text-white"> New Record </a>
    </div>
    <div class="card-body">
      <table id="datatablesSimple">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Province</th>
            <th>Barangay</th>
            <th>City</th>
            <th>Minicipality</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($users as $user) { ?>
            <tr>
              <th><?= $user['full_name'] ?></th>
              <th><?= $user['email'] ?></th>
              <th><?= $user['province'] ?></th>
              <th><?= $user['barangay'] ?></th>
              <th><?= $user['city'] ?></th>
              <th><?= $user['municipal'] ?></th>
              <th>
                <div class="d-flex justify-content-center gap-2">
                  <div>
                    <a href="?route=user-edit" class="btn btn-primary"> <i class="fas fa-edit"></i> </a>
                  </div>
                  <div>
                    <a class="btn btn-danger"> <i class="fas fa-trash-alt"></i> </a>
                  </div>
                </div>
              </th>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div> 
<?php
  include('./components/footer.php');
include('./components/script.php');
?>