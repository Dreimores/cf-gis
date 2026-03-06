<?php
include('./components/header.php');
include('./components/navbar.php');
?>
<div class="container-fluid px-4">
  <h1 class="mt-4"> Edit user </h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Create</li>
  </ol>
  <div class="card">
    <div class="card-body">
      <?php foreach($users as $user): ?>
        <form action="" id="save-form-farmer" method="post">
          <div class="row g-3 fs-6 fw-semibold">
            <div class="col-12">
              <div class="row g-3">
                <!-- Last Name -->
                <div class="col-12 col-md-4">
                  <label class="form-label">Last Name</label>
                  <input type="text" name="last_name" value="<?= $user['first_name'] ?>" class="form-control">
                </div>

                <!-- First Name -->
                <div class="col-12 col-md-4">
                  <label class="form-label">First Name</label>
                  <input type="text" name="first_name" value="<?= $user['last_name'] ?>" class="form-control">
                </div>

                <!-- Middle Name -->
                <div class="col-12 col-md-4">
                  <label class="form-label">Middle Name</label>
                  <input type="text" name="middle_name" value="<?= $user['middle_name'] ?>" class="form-control">
                </div>

              </div>
            </div>

            <!-- Email -->
            <div class="col-12 col-md-6">
              <label class="form-label">Email</label>
              <input type="email" name="email" value="<?= $user['email'] ?>" class="form-control">
            </div>

            <!-- Province -->
            <div class="col-12 col-md-6">
              <label class="form-label">Provice</label>
              <input type="email" name="province" value="<?= $user['province'] ?>" class="form-control">
            </div>

            <!-- Municipality -->
            <div class="col-12 col-md-6">
              <label class="form-label">Municipality</label>
              <input type="email" name="municipality" value="<?= $user['municipal'] ?>" class="form-control">
            </div>

            <!-- City -->
            <div class="col-12 col-md-6">
              <label class="form-label">City</label>
              <input type="email" name="city" value="<?= $user['city'] ?>" class="form-control">
            </div>

            <!-- Password -->
            <div class="col-12 col-md-6">
              <label class="form-label">Password</label>
              <input type="password" name="password" value="<?= $user['password'] ?>" class="form-control">
            </div>

            <!-- Confirm Password -->
            <div class="col-12 col-md-6">
              <label class="form-label">Confirm Password</label>
              <input type="password" name="confirm_password" class="form-control">
            </div>
          </div>
        </form>
      <?php endforeach ?>
    </div>

    <!-- Card footer -->
    <div class="card-footer">
      <div class="d-flex justify-content-end gap-2 flex-wrap">
        <a href="?route=user" class="btn btn-danger">
          <i class="fas fa-ban"></i> Cancel
        </a>
        <button form="save-form-farmer" class="btn btn-success">
          <i class="fas fa-save"></i> Save
        </button>
      </div>
    </div>
  </div>
</div>
<?php
include('./components/footer.php');
include('./components/script.php');
?>