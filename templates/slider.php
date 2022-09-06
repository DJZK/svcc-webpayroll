<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="admin.php" class="brand-link">
      <img src="includes/images/svcc.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-heavy"><b style="margin-left:45px; text-transform: uppercase; ">admin</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <br>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard

              </p>
            </a>
         
          </li>
          <li class="nav-header">MENU</li>
          <li class="nav-item">
            <a href="viewemployee.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Employee
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="viewaccounting.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Accounting
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="adminpayslip.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Payslip
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="department.php" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Department
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="position.php" class="nav-link">
              <i class="nav-icon fas fa-id-badge"></i>
              <p>
                Position
              </p>
            </a>
          </li> -->
          <li class="nav-header">Settings</li>
          <li class="nav-item">
            <a href="#" class="nav-link" data-widget="fullscreen" role="button">
              <i class="nav-icon fa fa-expand-arrows-alt"></i>
              <p>
                Fullscreen
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./logout.php" class="nav-link">
              <i class="nav-icon fa fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        
  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>