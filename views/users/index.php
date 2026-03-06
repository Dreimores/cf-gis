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
      <table id="datatablesSimple" class="table">
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
          <?php foreach ($users as $user) { ?>
            <tr>
              <td><?= $user['full_name'] ?></td>
              <td><?= $user['email'] ?></td>
              <td><?= $user['province'] ?></td>
              <td><?= $user['barangay'] ?></td>
              <td><?= $user['city'] ?></td>
              <td><?= $user['municipal'] ?></td>
              <td>
                <div class="d-flex justify-content-center gap-2">
                  <form action="?route=user-edit" method="post">
                    <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                    <button type="submit" class="btn btn-sm btn-primary">
                      <i class="fas fa-edit"></i>
                    </button>
                  </form>
                  <a class="btn btn-sm btn-danger">
                    <i class="fas fa-trash-alt"></i>
                  </a>
                </div>
              </td>
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