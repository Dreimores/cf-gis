<?php
include('./components/header.php');
include('./components/navbar.php');
?>
<div class="container-fluid px-4">
  <h1 class="mt-4"> Edit record </h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Edit</li>
  </ol>
  <div class="card">
    <div class="card-body">
      <form action="" id="save-form-farmer" method="post">
        <div class="row g-3 fs-6 fw-semibold">

          <!-- Assign Code -->
          <div class="col-12 col-md-6">
            <label class="form-label">Assign Code</label>
            <input type="number" name="assign_code" class="form-control">
          </div>

          <!-- Last Name -->
          <div class="col-12 col-md-6">
            <label class="form-label">Last Name</label>
            <input type="text" name="last_name" class="form-control">
          </div>

          <!-- First Name -->
          <div class="col-12 col-md-6">
            <label class="form-label">First Name</label>
            <input type="text" name="first_name" class="form-control">
          </div>

          <!-- Middle Name -->
          <div class="col-12 col-md-6">
            <label class="form-label">Middle Name</label>
            <input type="text" name="middle_name" class="form-control">
          </div>

          <!-- Birth Date -->
          <div class="col-12 col-md-6">
            <label class="form-label">Birth Date</label>
            <input type="date" name="birth_date" class="form-control">
          </div>

          <!-- Age -->
          <div class="col-12 col-md-6">
            <label class="form-label">Age</label>
            <input type="number" name="age" class="form-control">
          </div>

          <!-- Province -->
          <div class="col-12 col-md-6">
            <label class="form-label">Province</label>
            <select name="province" id="city" class="form-select">
              <option value="">-- Select province --</option>
            </select>
          </div>

          <!-- City/Municipality -->
          <div class="col-12 col-md-6">
            <label class="form-label">City/Municipality</label>
            <select name="city" id="city" class="form-select">
              <option value="">-- Select city/minucipality --</option>
            </select>
          </div>

          <!-- Barangay -->
          <div class="col-12 col-md-6">
            <label class="form-label">Barangay</label>
            <select name="province" id="barangay" class="form-select">
              <option value="">-- Select barangray --</option>
            </select>
          </div>

          <!-- Purok -->
          <div class="col-12 col-md-6">
            <label class="form-label">Purok</label>
            <input type="text" name="purok" class="form-control">
          </div>


          <!-- Cellphone Number -->
          <div class="col-12 col-lg-12">
            <label class="form-label">Notes</label>
            <textarea type="text" name="cellphone_number" class="form-control"></textarea>
          </div>

        </div>
      </form>
    </div>

    <!-- Card footer -->
    <div class="card-footer">
      <div class="d-flex justify-content-end gap-2 flex-wrap">
        <a href="?route=farm-list" class="btn btn-danger">
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