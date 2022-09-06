<?php

if($_SESSION['emp_type'] != "admin"){
  header("Location: index.php");
  session_destroy();
  exit();

}

if(!isset($_SESSION['emp_type'])){
header("Location: index.php");
session_destroy();
exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web-Payroll | Accounting</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>


<body class="hold-transition sidebar-mini">
<?php include 'templates/adminNav.php'; ?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="admin.php" class="brand-link">
      <img src="includes/images/svcc.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
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
          <li class="nav-item">
            <a href="admin.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
         
          </li>
          <li class="nav-header">MENU</li>
          <li class="nav-item  ">
            <a href="viewemployee.php" class="nav-link ">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Employee
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="viewaccounting.php" class="nav-link active">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Accounting
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="adminpayslip.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Payslip
              </p>
            </a>
          </li>
          <li class="nav-item">
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
          </li>
          <li class="nav-header">Settings</li>
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
<div class="content-wrapper">

  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Accounting List</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>







</div>




</div>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
</body>
</html>