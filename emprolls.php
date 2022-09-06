<?php

session_start();
    

include_once 'controller/db_config.php'; 
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
 
  <style>
    th{
 
    }
  </style>

     
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
          <li class="nav-item">
            <a href="accounting.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard

              </p>
            </a>
         
          </li>
          <li class="nav-header">MENU</li>
          <li class="nav-item ">
            <a href="emplist.php" class="nav-link ">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Employee
              </p>
            </a>
          </li>
          
          <li class="nav-item menu-open">
            <a href="emprolls.php" class="nav-link active">
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
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>NON-TEACHING STAFF PAYROLL</h1> -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-outline card-primary">
        <div class="card-header ">
            
        <form method  = "POST">
                    <div class="input-group mb-1">
                        
                        <div class="input-group-prepend">
                            
                            <label class="input-group-text" for="inputGroupSelect01">Filter By Department:</label>
                        </div>
                            <select class="custom-select" name = "filter">
                                <option value = "all"> </option>
                                <option value = "101">COLLEGE FACULTY</option>
                                <option value = "201">NON-TEACHING STAFF</option>
                                <option value = "301">SHS FACULTY</option>
                                <option value = "401">SHS FACULTY</option>
                                <option value = "501">ELEM FACULTY</option>
                                <option value = "601">BOARD OF TRUSTEE</option>
                            </select>  
                            <input class="btn  btn-sm btn-outline-primary" type = 'submit' name = "view">  
                            </div>
                        </form>
                        <br>


            <h3 class="card-title">Payroll Table</h3>
            
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

                <table id="example"  class="table table-condensed table-hover text-center"
                            style="width:100%">
                    <thead style="font-size:12px;">
                        <tr >
                            <th>Payroll ID</th>
                            <th>Employee Name</th>
                            <th>Monthly</th> 
                            <th>Gross Pay</th> 
                            <th>Less Absent</th> 
                            <th>Absent</th> 
                            <th>Retroactive Pay</th>  
                            <th>SSS</th> 
                            <th>Pagibig</th> 
                            <th>C/A</th> 
                            <th>Tuition Fee</th> 
                            <th>Uniform</th> 
                            <th>csb</th> 
                            <th>Total Deduction</th> 
                            <th>Honorarium/Allowance</th> 
                            <th>NetPay</th> 
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>

                    <?php

                           
                      $sql = "SELECT * FROM employee INNER JOIN payroll ON employee.empId  = payroll.empId ";  
                      $result = mysqli_query($conn, $sql); 
                              while($row = mysqli_fetch_assoc($result)){
                               

                                if(!isset($_POST['view'])){
                    ?>
                    <tr>
                         <td style="font-size: 12px;"><?php  echo $row['empId'];?></td>
                         <td style="font-size: 12px;"><?php  echo $row['empName'];?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['monthly'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['grossPay'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['lessAbsent'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['absent'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['retroactivePay'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['sss'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['pagIbig'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['c_a'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['tuitionFee'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['uniform'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['csb'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['totalDeduction'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['honorarium_allowance'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['netPay'], 2);?></td>
                    
                               
                            <td class="text-center" style="width: 150px">
                            <div class="btn-group">
      <a href="update_payroll.php?update_id=<?php echo $row['payrollId']?>" class="btn btn-outline-primary btn-track"><i class="fas fa-edit"></i></a>
      <a href="controller/delete.php?delete_payroll=<?php echo $row['payrollId']?>" class="btn btn-outline-primary btn-track swalDefaultSuccess"><i class="fas fa-trash"></i></a>
                            </div>
                           
                          </td>

                        </tr>
                      
                        <?php          
                                }
                                if(isset($_POST['view'])){
                                  $filter =  $_POST['filter'];
                                 $sub = substr($row['empNo'],0,3);
                                  
                                 if($sub == $filter){
                                
                                ?>
                                
                                <tr>
                         <td style="font-size: 12px;"><?php  echo $row['empId'];?></td>
                         <td style="font-size: 12px;"><?php  echo $row['empName'];?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['monthly'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['grossPay'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['lessAbsent'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['absent'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['retroactivePay'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['sss'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['pagIbig'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['c_a'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['tuitionFee'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['uniform'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['csb'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['totalDeduction'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['honorarium_allowance'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['netPay'], 2);?></td>
                    
                               
                            <td class="text-center" style="width: 150px">
                            <div class="btn-group">
                            <a href="update_payroll.php?update_id=<?php echo $row['payrollId']?>" class="btn btn-outline-primary btn-track"><i class="fas fa-edit"></i></a>
                            <a href="controller/delete.php?delete_payroll=<?php echo $row['payrollId']?>" class="btn btn-outline-primary btn-track swalDefaultSuccess"><i class="fas fa-trash"></i></a>
                            </div>
                           
                          </td>

                        </tr>

                      <?php }elseif($filter == 'all'){
                      ?>
                             <tr>
                         <td style="font-size: 12px;"><?php  echo $row['empId'];?></td>
                         <td style="font-size: 12px;"><?php  echo $row['empName'];?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['monthly'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['grossPay'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['lessAbsent'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['absent'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['retroactivePay'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['sss'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['pagIbig'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['c_a'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['tuitionFee'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['uniform'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['csb'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['totalDeduction'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['honorarium_allowance'], 2);?></td>
                         <td style="font-size: 12px;"><?php  echo number_format($row['netPay'], 2);?></td>
                    
                               
                            <td class="text-center" style="width: 150px">
                            <div class="btn-group">
                            <a href="update_payroll.php?update_id=<?php echo $row['payrollId']?>" class="btn btn-outline-primary btn-track"><i class="fas fa-edit"></i></a>
                            <a href="controller/delete.php?delete_payroll=<?php echo $row['payrollId']?>" class="btn btn-outline-primary btn-track swalDefaultSuccess"><i class="fas fa-trash"></i></a>
                            </div>
                           
                          </td>

                        </tr>
                    
                    <?php }} }?>
                       
                        </tbody>
                        <tfoot>
                          
                          <tr>
                            <th>GRAND TOTAL</th>
                            <th></th>
                            <th>
                            <?php
                           $sql = mysqli_query($conn, "SELECT SUM(monthly) as total FROM payroll");
                           $monthly_row = mysqli_fetch_array($sql);
                
                           echo number_format((int)$monthly_row['total'], 2);
                            ?>
                            </th>
                            <th>
                            <?php
                           $sql2 = mysqli_query($conn, "SELECT SUM(grossPay) as total FROM payroll");
                           $gross_pay_row = mysqli_fetch_array($sql2);
                
                           echo number_format((int)$gross_pay_row['total'], 2);
                            ?>
                            </th>
                            <th>
                            <?php
                           $sql3 = mysqli_query($conn, "SELECT SUM(lessAbsent) as total FROM payroll");
                           $less_absent_row = mysqli_fetch_array($sql3);
                
                           echo number_format((int)$less_absent_row['total'], 2);
                            ?>
                            </th>
                            <th>
                            <?php
                           $sql4 = mysqli_query($conn, "SELECT SUM(absent) as total FROM payroll");
                           $absent_row = mysqli_fetch_array($sql4);
                
                           echo number_format((int)$absent_row['total'], 2);
                            ?>
                            </th>
                            <th>
                            <?php
                           $sql5 = mysqli_query($conn, "SELECT SUM(retroactivePay) as retroactivePay FROM payroll");
                           $retroactivePay_row = mysqli_fetch_array($sql5);
                
                           echo number_format((int)$retroactivePay_row['retroactivePay'], 2);
                            ?>
                            </th>
                            <th>
                            <?php
                           $sql6 = mysqli_query($conn, "SELECT SUM(sss) as sss FROM payroll");
                           $sss_row = mysqli_fetch_array($sql6);
                
                           echo number_format((int)$sss_row['sss'], 2);
                            ?>
                            </th>
                            <th>
                            <?php
                           $sql7 = mysqli_query($conn, "SELECT SUM(pagIbig) as pagIbig FROM payroll");
                           $pagIbig_row = mysqli_fetch_array($sql7);
                
                           echo number_format((int)$pagIbig_row['pagIbig'], 2);
                            ?>
                            </th>
                            <th>
                            <?php
                           $sql8 = mysqli_query($conn, "SELECT SUM(c_a) as c_a FROM payroll");
                           $c_a_row = mysqli_fetch_array($sql8);
                
                           echo number_format((int)$c_a_row['c_a'], 2);
                            ?>
                            </th>
                            <th>
                            <?php
                           $sql9 = mysqli_query($conn, "SELECT SUM(tuitionFee) as tuitionFee FROM payroll");
                           $tuitionFee_row = mysqli_fetch_array($sql9);
                
                           echo number_format((int)$tuitionFee_row['tuitionFee'], 2);
                            ?>
                            </th>
                            <th>
                            <?php
                              $sql10 = mysqli_query($conn, "SELECT SUM(uniform) as uniform FROM payroll");
                              $uniform_row = mysqli_fetch_array($sql10);
                   
                              echo number_format((int)$uniform_row['uniform'], 2);
                              ?>
                            </th>
                            <th>
                            <?php
                              $sql14 = mysqli_query($conn, "SELECT SUM(csb) as csb FROM payroll");
                              $csb_row = mysqli_fetch_array($sql14);
                   
                              echo number_format((int)$csb_row['csb'], 2);
                              ?>
                            </th>
                            <th>
                              <?php
                              $sql11 = mysqli_query($conn, "SELECT SUM(totalDeduction) as totalDeduction FROM payroll");
                              $totalDeduction_row = mysqli_fetch_array($sql11);
                   
                              echo number_format((int)$totalDeduction_row['totalDeduction'], 2);
                              ?>
                            </th>
                            <th>
                            <?php
                              $sql12 = mysqli_query($conn, "SELECT SUM(honorarium_allowance) as honorarium_allowance FROM payroll");
                              $honorarium_allowance_row = mysqli_fetch_array($sql12);
                   
                              echo number_format((int)$honorarium_allowance_row['honorarium_allowance'], 2);
                              ?>
                            </th>
                            <th>
                              <?php
                              $sql13 = mysqli_query($conn, "SELECT SUM(netPay) as netPay FROM payroll");
                              $netPay_row = mysqli_fetch_array($sql13);
                   
                              echo number_format((int)$netPay_row['netPay'], 2);
                              ?>
                            </th>
                            
                            
                       
                          </tr>
                        </tfoot>
                </table>

        </div>
        
            <!-- /.row -->
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  
            

  </div>


  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- <strong>Copyright &copy; 2022-2022 <a href="#"></a>.</strong> -->
    All rights reserved. | SVCC IT SOLUTION
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
        title: 'removing.'
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
                title: 'Payroll - Report',
                filename: 'Payroll - Report',
                footer: true,
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'excelHtml5',
                title: 'Payroll - Report',
                filename: 'Payroll - Report',
                footer: true,
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'Payroll - Report',
                filename: 'Payroll - Report',
                footer: true,
                exportOptions: {
                    columns: [ 0, 1, 2, 3 ]
                }
            },
            'colvis'
        ],
        
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