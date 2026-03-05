<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

  <!-- Navbar Brand-->
  <a class="navbar-brand ps-3 d-flex align-items-center gap-2" href="?route=dashboard">
    <img src="./images/cacao-logo.png" alt="Logo" class="rounded-circle img-fluid" width="40" height="40">
    <span class="fw-bold">CS-FIS</span>
  </a>

  <!-- Sidebar Toggle-->
  <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

  <!-- Navbar Search-->
  <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
    <div class="input-group">
      <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
        aria-describedby="btnNavbarSearch" />
      <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
    </div>
  </form>

  <!-- Navbar-->
  <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
        aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="#!">Settings</a></li>
        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
        <li>
          <hr class="dropdown-divider" />
        </li>
        <li><a class="dropdown-item" href="#!">Logout</a></li>
      </ul>
    </li>
  </ul>
</nav>

<div id="layoutSidenav">
  <div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
      <div class="sb-sidenav-menu">
        <div class="nav">
          <div class="sb-sidenav-menu-heading">Core</div>
          <a class="nav-link" href="?route=dashboard">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Dashboard
          </a>

          <div class="sb-sidenav-menu-heading">Interface</div>

          <!-- User Management -->
          <a class="nav-link" href="?route=user">
            <div class="sb-nav-link-icon">
              <i class="fas fa-user-cog"></i>
            </div>
            User Management
          </a>

          <!-- Data Collections -->
          <div class="sb-sidenav-menu-heading">Data Collections</div>

          <a class="nav-link" href="?route=farm-info">
            <div class="sb-nav-link-icon">
              <i class="fas fa-tractor"></i>
            </div>
            Farmers Information
          </a>

          <a class="nav-link" href="?route=grows-info">
            <div class="sb-nav-link-icon">
              <i class="fas fa-seedling"></i>
            </div>
            Growers Information
          </a>

          <!-- System Data Management -->
          <div class="sb-sidenav-menu-heading">System Data Management</div>

          <a class="nav-link" href="">
            <div class="sb-nav-link-icon">
              <i class="fas fa-map-marked-alt"></i>
            </div>
            Farm Management
          </a>

          <a class="nav-link" href="">
            <div class="sb-nav-link-icon">
              <i class="fas fa-leaf"></i>
            </div>
            Cacao Commodity
          </a>

          <a class="nav-link" href="">
            <div class="sb-nav-link-icon">
              <i class="fas fa-hand-holding-usd"></i>
            </div>
            Investment Guide
          </a>

          <!-- System Support -->
          <a class="nav-link collapsed mt-3" href="#" data-bs-toggle="collapse" data-bs-target="#system-support"
            aria-expanded="false" aria-controls="system-support">
            <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
            Support
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>
          <div class="collapse" id="system-support" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
              <a class="nav-link" href="#"> Generate of reports </a>
            </nav>
          </div>
          <div class="collapse" id="system-support" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
              <a class="nav-link" href="#"> Sms Support </a>
            </nav>
          </div>
          <div class="collapse" id="system-support" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
              <a class="nav-link" href="#"> Sms Help Support </a>
            </nav>
          </div>

          <!-- End system support -->

        </div>
      </div>
      <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
      </div>
    </nav>
  </div>
  <div id="layoutSidenav_content">
    <main>