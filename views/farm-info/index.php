<?php
include('./components/header.php');
include('./components/navbar.php');
?>
<div class="container-fluid px-4">
  <h1 class="mt-4"> Farmers Information </h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">List of Farmers</li>
  </ol>
  <div class="card mb-4">
    <div class="card-header d-flex justify-content-between">
      <div>
        <i class="fas fa-table me-1"></i>
        Records
      </div>
      <a href="?route=farm-create" class="btn btn-dark text-white"> New Record </a>
    </div>
    <div class="card-body">
      <table id="datatablesSimple">
        <thead>
          <tr>
            <th>Assign Code#</th>
            <th>Birth Date</th>
            <th>Age</th>
            <th>Purok</th>
            <th>Phone Number</th>
            <th>Notes</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($farmers as $farmer): ?>
            <tr>  
              <th><?= $farmer['assign_code'] ?></th>
              <th><?= $farmer['birth_date'] ?></th>
              <th><?= $farmer['age'] ?></th>
              <th><?= $farmer['purok'] ?></th>
              <th><?= $farmer['cellphone_number'] ?></th>
              <th><?= $farmer['notes'] ?></th>
              <th>
                <div class="d-flex justify-content-center gap-2">
                  <div>
                    <a href="?route=farm-edit" class="btn btn-primary"> <i class="fas fa-edit"></i> </a>
                  </div>
                  <div>
                    <a class="btn btn-danger"> <i class="fas fa-trash-alt"></i> </a>
                  </div>
                </div>
              </th>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div> 
<?php
  include('./components/footer.php');
include('./components/script.php');
?>