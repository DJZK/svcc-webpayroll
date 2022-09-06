<?php

session_start();
    

include_once 'controller/db_config.php'; 
          //$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
         //  echo  $_SESSION['link']=$actual_link;
          if($_SESSION['emp_type'] != 'accounting'){
        
                   
//                    header("Location:".$_SESSION['link']);
// exit();
      }
include_once 'salary_status.php';
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
      <span class="brand-text font-weight-heavy"><b style="margin-left:25px; text-transform: uppercase; ">ADMIN</b></span>
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
          <li class="nav-item">
            <a href="admin.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard

              </p>
            </a>
         
          </li>
          <li class="nav-header">MENU</li>
          <li class="nav-item ">
            <a href="viewemployee.php" class="nav-link ">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Employee
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="emprolls.php" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Payroll
              </p>
            </a>
          </li> -->
          <li class="nav-item menu-open">
            <a href="" class="nav-link active">
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
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Payslip List</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-outline card-primary">
        <div class="card-header ">
            
            <h3 class="card-title">Payslip Table</h3>
            
        <!-- <div class="col-sm-6">
            <ol class=" float-sm-right">
            <button class="btn btn-default btn-sm"  data-toggle="modal" data-target="#exampleModalCenter">Add New Employee</button>
            <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#payslip">New Payslip</button>
            </ol>
          </div> -->
          <div class="card-tools">
              
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>

        </div>
        <!-- /.card-header -->
        <div class="card-body" style="overflow-x:auto;">

                <table id="example" class="table  table-bordered table-condensed table-hover text-center" style="width:100%">
                    <thead>
                        <tr>
                            <th>Payslip ID</th>
                            <th>Payroll ID</th>
                            <th>Date Covered</th>
                            <th>Date Sent</th>
                            <th>Date Received</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php

                           
                              $select = "SELECT * FROM payslip";
                              $resul= mysqli_query($conn, $select);
                              while($row = mysqli_fetch_assoc($resul)){
                                    

                                
                                   

                              
                        
                    ?>
                    <tr>
                    <td><?php echo $row['payslipId']; ?></td>
                                <td><?php echo $row['empId']; ?></td>
                                <td><?php echo $row['dateCovered']; ?></td>
                                <td><?php echo $row['dateSent']; ?></td>
                                <td><?php echo $row['dateReceived']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                               
                            <td class="text-center" style="width: 150px">
                            <div class="btn-group">
                              <a href="update_payslip_admin.php?update_id=<?php echo $row['payslipId']?>" class="btn btn-outline-primary  btn-track"><i class="fas fa-edit"></i></a>

                            </div>
                           
                          </td>

                        </tr>
                      
                        <?php          
                                    }
                        ?>
                        </tbody>
                </table>


        </div>
        <div class="card-footer clearfix">

                    <!-- <button class="btn  btn-sm btn-default btn-track border-primary float-right" data-toggle="modal" data-target="#newEmployee"><i class="fa fa-plus"></i> Employee</button>
                    <button class="btn  btn-sm btn-default btn-track border-primary float-right" data-toggle="modal" data-target="#payslip"><i class="fa fa-plus"></i> Payslip</button> -->


            </div>
            <!-- /.row -->
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  
            
    
    <!-- employee modal -->


  </div>


  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- <strong>Copyright &copy; 2022-2022 <a href="#"></a>.</strong> -->
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->
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