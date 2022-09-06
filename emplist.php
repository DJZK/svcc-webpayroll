<?php

session_start();
    

include_once 'controller/db_config.php'; 
include_once 'controller/add_info.php';
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
    <div class="wrapper">
        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="includes/images/svcc.png" alt="AdminLTELogo" height="130" width="120">
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
            <a href="accounting.php" class="brand-link">
                <img src="includes/images/svcc.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-heavy"><b
                        style="margin-left:25px; text-transform: uppercase; ">Accounting</b></span>
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
                            aria-label="Search">
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
                        <li class="nav-item">
                            <a href="accounting.php" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard

                                </p>
                            </a>

                        </li>
                        <li class="nav-header">MENU</li>
                        <li class="nav-item menu-open">
                            <a href="emplist.php" class="nav-link active">
                                <i class="nav-icon fas fa-user"></i>
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
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                       
                        <!-- <form method  = "POST">
                            <select name = "filter">
                                <option vlaue = "all">All</option>
                                <option vlaue = "101">101</option>
                                <option vlaue = "201">201</option>
                                <option vlaue = "301">301</option>
                                <option vlaue = "401">401</option>
                                <option vlaue = "501">501</option>
                                <option vlaue = "601">601</option>
                            </select>    
                            <input type = 'submit' name = "view">
                        </form> -->
                            <h1><?php 
                            
                                            if(isset($_POST['view'])){
                                              $test =  $_POST['filter'];
                                                if($test == 101){
                                                    echo "College Faculty";
                                                }elseif($test == 201){
                                                        echo "Non-teaching staff";
                                                }elseif($test == 301){
                                                    echo "SHS faculty";
                                                }elseif($test == 301){
                                                    echo "JHS faculty";
                                                }elseif($test == 401){
                                                    echo "JHS faculty";
                                                }elseif($test == 501){
                                                    echo "Elementary faculty";
                                                }elseif($test == 501){
                                                    echo "Board of trustees";
                                                }



                                            }
                                            //echo $text = "Employee List"
                            ?></h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="card card-outline card-primary">
                <div class="card-footer clearfix">
                    
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
                        
                        <!-- <button class="btn  btn-sm btn-outline-primary float-right " data-toggle="modal" data-target="#payslip"><i class="fa fa-plus"></i> Payslip</button> -->


                    </div>
                    <div class="card-header ">

                 

                        <h3 class="card-title">EMPLOYEE LIST</h3>

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

                        <table id="example" class="table table-condensed table-hover text-center"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>Employee No.</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Status</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                         <?php
 
                            
                              $select = "SELECT * FROM employee WHERE empEnabale = 'enable' ";
                              $resul= mysqli_query($conn, $select);
                              while($row = mysqli_fetch_assoc($resul)){
                                    
                                    

                                if(!isset($_POST['view'])){
                                
                                   

                              
                        
                    ?>


                                <tr>
                                    <td><?php echo $row['empNo']; ?></td>
                                    <td><?php echo $row['empName']; ?></td>
                                    <td><?php echo $row['empDesignation']; ?></td>
                                    <td><?php echo $row['empStatus']; ?></td>
                                    <td><?php echo $row['empEmail']; ?></td>
                                    <td class="text-center" style="width: 150px">
                                        <div class="btn-group">
                                <a data-toggle="tooltip" data-placement="top" title="Payslip Record" href="payslip_record.php?record=<?php echo $row['empId']?>"
                                                 class="btn btn-outline-primary btn-track"  target="popup" onclick="window.open('payslip_record.php?record=<?php echo $row['empId']?>','name','width=600,height=400')"><i class="fas fa-book"></i></a>

                                <a data-toggle="tooltip" data-placement="top" title="Payroll History" href="emp_payroll_history.php?history=<?php echo $row['empId']?>" 
                                                class="btn btn-outline-primary btn-flat" target="popup" onclick="window.open('emp_payroll_history.php?history=<?php echo $row['empId']?>','name','width=600,height=400')"><i class="fas fa-list"></i></a>

                                            <!-- <a href="javascript:void(0)" class="btn btn-outline-primary btn-track"><i class="fas fa-eye"></i></a> -->
                                <a data-toggle="tooltip" data-placement="top" title="Send Payslip" href="payslip.php?pay_id=<?php echo $row['empId']?>"

                                                class="btn btn-outline-primary btn-flat" target="popup" onclick="window.open('payslip.php?pay_id=<?php echo $row['empId']?>','name','width=600,height=400')"><i class="fas fa-file"></i></a>
                                                
                                <a data-toggle="tooltip" data-placement="top" title="Update Employee" href="update.php?update_id=<?php echo $row['empId']?>"

                                                class="btn btn-outline-primary btn-flat" target="popup" onclick="window.open('update.php?update_id=<?php echo $row['empId']?>','name','width=600,height=400')"><i class="fas fa-edit"></i></a>
                                <!-- <a data-toggle="tooltip" data-placement="top" title="Delete Employee" href="controller/delete.php?delete=<?php // echo $row['empId']?>"
                                
                                                class="btn btn-outline-primary btn-track btn-del"><i
                                                    class="fas fa-trash"></i></a> -->
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
                                    <td><?php echo $row['empNo']; ?></td>
                                    <td><?php echo $row['empName']; ?></td>
                                    <td><?php echo $row['empDesignation']; ?></td>
                                    <td><?php echo $row['empStatus']; ?></td>
                                    <td><?php echo $row['empEmail']; ?></td>
                                    <td class="text-center" style="width: 150px">
                                        <div class="btn-group">
                                <a data-toggle="tooltip" data-placement="top" title="Payslip Record" href="payslip_record.php?record=<?php echo $row['empId']?>" class="btn btn-outline-primary btn-track"><i
                                                    class="fas fa-book"></i></a>

                                <a data-toggle="tooltip" data-placement="top" title="Payroll History" href="emp_payroll_history.php?history=<?php echo $row['empId']?>" class="btn btn-outline-primary btn-flat"><i
                                                    class="fas fa-list"></i></a>

                                            <!-- <a href="javascript:void(0)" class="btn btn-outline-primary btn-track"><i class="fas fa-eye"></i></a> -->
                                <a data-toggle="tooltip" data-placement="top" title="Send Payslip" href="payslip.php?pay_id=<?php echo $row['empId']?>"

                                                class="btn btn-outline-primary btn-flat"><i class="fas fa-file"></i></a>
                                <a data-toggle="tooltip" data-placement="top" title="Update Employee" href="update.php?update_id=<?php echo $row['empId']?>"

                                                class="btn btn-outline-primary btn-flat"><i class="fas fa-edit"></i></a>
                                <a data-toggle="tooltip" data-placement="top" title="Delete Employee" href="controller/delete.php?delete=<?php echo $row['empId']?>"
                                
                                                class="btn btn-outline-primary btn-track btn-del"><i
                                                    class="fas fa-trash"></i></a>
                                        </div>

                                    </td>

                                </tr>

          
        
        <?php  

            

        }elseif($filter == 'all'){
        
?>
             <tr>
                                    <td><?php echo $row['empNo']; ?></td>
                                    <td><?php echo $row['empName']; ?></td>
                                    <td><?php echo $row['empDesignation']; ?></td>
                                    <td><?php echo $row['empStatus']; ?></td>
                                    <td><?php echo $row['empEmail']; ?></td>
                                    <td class="text-center" style="width: 150px">
                                        <div class="btn-group">
                                <a data-toggle="tooltip" data-placement="top" title="Payslip Record" href="payslip_record.php?record=<?php echo $row['empId']?>" class="btn btn-outline-primary btn-track"><i
                                                    class="fas fa-book"></i></a>

                                <a data-toggle="tooltip" data-placement="top" title="Payroll History" href="emp_payroll_history.php?history=<?php echo $row['empId']?>" class="btn btn-outline-primary btn-flat"><i
                                                    class="fas fa-list"></i></a>

                                            <!-- <a href="javascript:void(0)" class="btn btn-outline-primary btn-track"><i class="fas fa-eye"></i></a> -->
                                <a data-toggle="tooltip" data-placement="top"  title="Send Payslip" href="payslip.php?pay_id=<?php echo $row['empId']?>" target="_blank"

                                                class="btn btn-outline-primary btn-flat"><i class="fas fa-file"></i></a>
                                <a data-toggle="tooltip" data-placement="top" target="_blank" title="Update Employee" href="update.php?update_id=<?php echo $row['empId']?>"
                                                class="btn btn-outline-primary btn-flat"><i class="fas fa-edit"></i></a>
                            
                                <a data-toggle="tooltip" data-placement="top" title="Delete Employee" href="controller/delete.php?delete=<?php echo $row['empId']?>"
                                
                                                class="btn btn-outline-primary btn-track btn-del"><i
                                                    class="fas fa-trash"></i></a>
                                        </div>

                                    </td>

                                </tr>

<?php
        }



        }
                            
                            
                            }
                        ?>
                            </tbody>
                        </table>
                        <button class="btn  btn-sm btn-outline-primary float-right" data-toggle="modal"
                            data-target="#newEmployee"><i class="fa fa-plus"></i> Employee</button>

                        <?php if (isset($_GET['m'])) : ?>
                        <div class="flash-data" data-flashdata="<?= $_GET['m']; ?>"></div>
                        <?php endif; ?>
                    </div>
                            
                    <!-- /.row -->
                    <!-- /.card-body -->
                </div>
                
                <!-- /.card -->
            </section>
            <!-- /.content -->

                                

            <!-- employee modal -->
            <div class="modal fade" id="newEmployee" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add Employee</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Employee Number</label>
                                    <input type="text" class="form-control" name="emp_no"
                                        placeholder="Enter employee number" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Employee Name</label>
                                    <input type="text" class="form-control" name="emp_name"
                                        placeholder="Enter employee Full name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Employee Email</label>
                                    <input type="text" class="form-control" name="emp_email"
                                        placeholder="Enter employee Email">
                                </div>
                               
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Department</label>
                                    <input type="text" class="form-control" name="emp_department"
                                        placeholder="Enter Employee Department">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Status</label>
                                    <input type="text" class="form-control" name="emp_status"
                                        placeholder="Enter Employee Status">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Designation</label>
                                    <input type="text" class="form-control" name="emp_designation"
                                        placeholder="Enter Employee Designation">
                                </div> 
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Employee Type</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="emp_type">
                                        <option value="employee">Employee</option>
                                        <option value="accounting">Accounting</option>
                                    </select>
                                </div>                                                                     
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" name="submit"></input>
                        </div>
                        </form>
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
</script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
<?php include 'templates/footer.php'?>
<script>
    $('.btn-del').on('click', function(e) {
        e.preventDefault();
        const href = $(this).attr('href')

        Swal.fire({
            title: 'Are you sure?',
            text: 'Record will be deleted?',
            type: 'warning',
            showCancelButton: true,
            cancelButtonColor: '#dc3545',
            confirmButtonColor: '#007bff',
            confirmButtonText: 'Delete Record',
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })
    })

    const flashdata = $('.flash-data').data('flashdata')
    if (flashdata) {
        Swal.fire({
            type: 'success',
            title: 'Record Delete',
            text: 'Record has been Deleted!'
        })
    }
</script>
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
                'colvis'
            ]
        });
    });
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
</body>
</html>