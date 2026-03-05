<?php
include('./components/header.php');
include('./components/navbar.php');
?>
<div class="container-fluid px-4">
  <h1 class="mt-4"> Growers Information </h1>
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
            <th>Code #</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Phone Number</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>123</th>
            <th>sample last name</th>
            <th>sample first name</th>
            <th>sample middle name</th>
            <th>phone number</th>
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
        </tbody>
      </table>
    </div>
  </div>
</div> 
<?php
  include('./components/footer.php');
include('./components/script.php');
?>