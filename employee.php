<?php

session_start();
    
if($_SESSION['emp_type'] != "employee"){
    header("Location: index.php");
    session_destroy();
    exit();

}

if(!isset($_SESSION['emp_type'])){
header("Location: index.php");
session_destroy();
exit();
}

 include_once 'classes/get_ip.php';  
include_once 'controller/db_config.php'; 
//include_once 'controller/payment.php';
  

error_reporting(0);



    
if( ($_SESSION['emp_type'] != "employee" )||( empty( $_SESSION['id'])) ){
    header("Location: index.php");
    session_destroy();
    exit();

}







?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php include 'templates/header.php'?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <script>
        function printDiv() {
            var divContents = document.getElementById("GFG").innerHTML;
            var a = window.open('', '', 'height=500, width=500');
            a.document.write('<html>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="includes/images/svcc.png" alt="SVCC LOGO" height="130" width="120">
        </div> -->

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">St Vincent College of Cabuyao</a>
                </li>
            </ul>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="includes/images/svcc.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                    <span class="brand-text font-weight-heavy"><b style="margin-left:25px; text-transform: uppercase; ">Employee</b></span>
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
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
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

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-outline card-primary">
                                <div class="card-header border-1">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="card-title">PAYSLIP FORM</h3>
                                        <h5><?php include 'classes/SetPayrollDate.php';?></h5>
                                    </div>
                                </div>
                                <div id="GFG" class="card-body box-profile" style="overflow-x:auto;">
                                <center><table>
                                        <tr>
                                            <td rowspan="2"><img class="" src="includes/images/svcc.png" width="50" height="55"></td>
                                            <td><b>ST. VINCENT COLLEGE OF CABUYAO</b></td>
                                        </tr>
                                        <tr>
                                            <center><td>Mamatid, Cabuyao Laguna</td></center>
                                        </tr>
                                    </table></center>
                                
                                    
                                    <div class="card">
                                    <?php 
                         $emp_id =  $_SESSION['id']; 
                      
                      
                        // $payslip_select = "SELECT * FROM payslip WHERE empId = '$emp_id' ";
                        $sql = "SELECT * FROM payroll INNER JOIN payslip ON payroll.empId  = $emp_id";  
                        $sql2 = "SELECT * FROM payslip WHERE empId = '$emp_id'";
                        $payslip_query = mysqli_query($conn, $sql);
                        $payslip_query2 = mysqli_query($conn, $sql2);
                        
                       while ($row2 = mysqli_fetch_assoc($payslip_query2)){
                        $row = mysqli_fetch_assoc($payslip_query);
                        if($row2['status'] == "Not Received"){
                          
                                
                      ?>   
                                    <hr></hr>
                                    <center><h5>PAYSLIP</h5>
                                    <hr></hr>
                                    <h5><b><?php echo $row['dateSent']; ?></b></h5>
                                    <hr></hr>
                                    <h5><small><?php echo $row['dateReceived']; ?></small></h5>
                                    <hr></hr>          
                        <h5><b><?php echo $_SESSION['name'];?><b></h5>
                        <hr></hr>
                        <?php echo $_SESSION['empPoss'];?>
                        <hr></hr>
                        <center><table>
                            <tr>
                                <td colspan="2">SALARY:(Gross)</td>
                                <td><?php echo number_format($row['grossPay'], 2);?></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                        </table></center>
                                      <div class="row mx-auto mt-5">
                                      <div class="col">      
                                            
                                        
                                            <p>Monthly: <?php echo $row['monthly'];?></p>    
                                            <p>Absent: <?php echo number_format($row['absent'], 2);?></p>
                                            <p>Less: <?php echo number_format($row['lessAbsent'], 2);?></p>    
                                            <p>Allowance: <?php echo number_format($row['honorarium_allowance'], 2);?></p>

                                        </div><br>
                                       <div class="col">
                                            <p>Retroactive Pay: <?php echo number_format($row['retroactivePay'], 2);?></p>
                                            <p>SSS: <?php echo number_format($row['sss'], 2);?></p>
                                            <p>Absent: <?php echo number_format($row['pagIbig'], 2);?></p>
                                            <p>c/a : <?php echo number_format($row['c_a'], 2);?></p>   
                                            <p>Tuition: <?php echo number_format($row['tuitionFee'], 2);?></p>                               
                                            <p>Uniform: <?php echo number_format($row['uniform'], 2);?></p>
                                            <p>csb: <?php echo number_format($row['csb'], 2);?></p> 

                                       </div>
                                          
                                      </div>  
                                   <div class="col">
                                        <p >Total Deduction: <?php echo number_format($row['totalDeduction'], 2);?></p>
                                        <p >Net Pay: <?php echo number_format($row['netPay'], 2);?></p> 
                                   </div>
                               
                      <?php 
                        }  
                        }?>
                        </div>
                                </div>
                                <div class="card-footer" style="overflow-x:auto;">

                                    <div class="d-flex flex-row justify-content-end">
                                        <span class="mr-2">
                                            <form method="POST" action="controller/payment.php">
                                                <button class="btn  btn-sm btn-outline-primary" name="submit"><i
                                                        class="fas fa-file"></i> Payment Received</button>
                                            </form>
                                        </span>

                                        <span>
                                            <button class="btn  btn-sm btn-outline-primary" onclick="printDiv()"><i class="fas fa-print"></i>
                                                Print</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- /.card -->


                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-lg-6">
                            <div class="card card-outline card-primary ">
                                <div class="card-header border-0">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="card-title">Payroll History</h3>
                                    </div>
                                </div>
                                <div class="card-body" style="overflow-x:auto;">
                                    <table id="example"
                                        class="table  table-bordered table-condensed table-hover text-center"
                                        style="width:100%">
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
                        $emp_id =  $_SESSION['id']; 
                        $payslip_select = "SELECT * FROM payslip WHERE empId = '$emp_id' ";
                        $mysql = mysqli_query($conn, $payslip_select);
                        while($row = mysqli_fetch_assoc($mysql)){
                            if($row['status']=="Received"){
                      ?>
                                            <tr>
                                                <td><?php echo $row['payslipId']; ?></td>
                                                <td><?php echo $row['empId']; ?></td>
                                                <td><?php echo $row['dateCovered']; ?></td>
                                                <td><?php echo $row['dateSent']; ?></td>
                                                <td><?php echo $row['dateReceived']; ?></td>
                                                <td><?php echo $row['status']; ?></td>
                                                <td><a href="empView.php?empid=<?php echo $row['payslipId'];?>" target="popup" onclick="window.open('empView.php?empid=<?php echo $row['payslipId'];?>','name','width=600,height=400')">View</a></td>
                                            </tr>
                                            <?php }} ?>
                                        </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
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
<!-- DataTables -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js">
</script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.colVis.min.js">
</script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>
<?php include 'templates/footer.php'?>
<script>
$(document).ready(function() {
    $('#example').DataTable({
        responsive: true,
        dom: 'Bfrtip',
        buttons: [{
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [0, ':visible']
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
                    columns: [0, 1, 2, 3]
                }
            },

        ]
    });
});
</script>

</html>