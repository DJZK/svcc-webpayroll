
<?php

session_start();

include_once 'controller/db_config.php'; 
include_once 'controller/insert_data.php';    



  if($_SESSION['emp_type'] != "accounting"){
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
    <?php include 'templates/header.php'?>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <script src="includes/js/jquery.jqprint-0.3.js" type="text/javascript"></script>
 
  

     
    </head>
<body class="hold-transition sidebar-mini">
<?php include 'templates/nav.php'; ?>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="accounting.php" class="brand-link">
      <img src="includes/images/svcc.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-heavy"><b style="margin-left:25px; text-transform: uppercase; ">Accounting</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="#" class="d-block"><?php  echo $_SESSION['name'];?></a>
        </div>
      </div>

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
            <a href="emplist.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Employee
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="emprolls.php" class="nav-link">
              <i class="nav-icon fas fa-file-archive"></i>
              <p>
                Payroll
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="emppays.php" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Payslip
              </p>
            </a>
          </li>
          <li class="nav-header">SETTINGS</li>
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Your Dashboard</h1>
          </div><!-- /.col -->
        
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Employee</span>
                <span class="info-box-number">
                  <?php 
                   $sql = "SELECT COUNT(*) AS total FROM employee";
                   $count = 0;
                   if ($result = mysqli_query($conn, $sql)) {
                       $row = mysqli_fetch_row($result);
                       $count = $row[0];
                   }
                   echo $count;
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-file-archive"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Payroll</span>
                <span class="info-box-number">
                <?php 
                   $sql = "SELECT COUNT(*) AS total FROM payroll";
                   $count = 0;
                   if ($result = mysqli_query($conn, $sql)) {
                       $row = mysqli_fetch_row($result);
                       $count = $row[0];
                   }
                   echo $count;
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-file-upload"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Payslip Sent</span>
                <span class="info-box-number">
                <?php 
  $sql = "SELECT COUNT(dateSent) AS total FROM payslip";
                   $count = 0;
                   if ($result = mysqli_query($conn, $sql)) {
                       $row = mysqli_fetch_row($result);
                       $count = $row[0];
                   }
                   echo $count;
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-file-download"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Payslip Received</span>
                <span class="info-box-number">
                <?php 
                   $sql = "SELECT COUNT(dateReceived) AS total FROM payslip";
                   $count = 0;
                   if ($result = mysqli_query($conn, $sql)) {
                       $row = mysqli_fetch_row($result);
                       $count = $row[0];
                   }
                   echo $count;
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </section>

            
    
    <!-- employee modal -->
    <div class="modal fade" id="newEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add Employee</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

          <form method = "POST" action="add_info.php">


                <div class="form-group">
                    <label for="exampleInputEmail1">Employee Number</label>
                    <input type="text" class="form-control" name = "emp_no"  placeholder="Enter employee number">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Employee  Name</label>
                    <input type="text" class="form-control" name = "emp_name"  placeholder="Enter employee Full name">
                </div>

                 <div class="form-group">
                    <label for="exampleInputPassword1">Employee  Email</label>
                    <input type="text" class="form-control" name = "emp_email"  placeholder="Enter employee Full name">
                </div>



                <div class="form-group">
                    <label for="exampleFormControlSelect1">Employee Type</label>

                    <select class="form-control" id="exampleFormControlSelect1" name = "emp_type">

                    <option value="employee">Employee</option>
                    <option value="accounting">Accounting</option>
                    
                    </select>
                </div>


                 <div class="form-group">
                    <label for="exampleInputPassword1">Employee Position</label>
                    <input type="text" class="form-control" name = "emp_position"  placeholder="Enter employee name">
                </div>

               
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit"  class="btn btn-primary" name="submit"></input>
        </div>

        </form>




          </div>
        </div>
      </div>
    </div>
    <!-- payslip modal -->
    <div class="modal fade" id="payslip" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Payslip</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

          <form  method = "POST" >

          <div class="form-row">

          <div class="form-group col-md-4">

          <label for="inputEmail4">Employee Number</label>
          <input type="text" class="form-control" id="inputEmail4" placeholder="Employee Number" name="emp_no">
        </div>

                <div class="form-group col-md-4">
                 


                    <label for="inputEmail4">Rate</label>

                        <input type="text"  class="form-control" placeholder="Rate" id="Text1"  oninput="add_number()">

                    
                    </div>   
                      
                    <div class="form-group col-md-4">
                         
                         <label for="inputPassword4">Days of Attend</label>
                         <input type="text" class="form-control" placeholder="Days Attend" id="Text2"  oninput="add_number()">
                    </div>

                        
                    </div>

                    <div class="form-group">
                    <label for="inputPassword4">Total Salary</label>
                        
                        <input type="text" class="form-control mad" readonly name="salary" id="txtresult" name="salary">

                    
            </div>

   


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name = "send" >Send</button>
            </form>




            
          </div>
          
        </div>
      </div>
    </div>
  </div>


</body>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
<?php include 'templates/footer.php'?>
<script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
  });
</script>
<script>
  
$(document).ready(function() {
    $('#example').DataTable( {
      responsive: true,
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3 ]
                }
            },
            'colvis'
        ]
    } );
} );
  </script>
   <script>

       var text1 = document.getElementById("Text1");
var text2 = document.getElementById("Text2");

function add_number() {
   var first_number = parseFloat(text1.value);
   if (isNaN(first_number)) first_number = 0;
   var second_number = parseFloat(text2.value);
   if (isNaN(second_number)) second_number = 0;
   var result = first_number * second_number;
   document.getElementById("txtresult").value = result;
}

    </script>

</html>