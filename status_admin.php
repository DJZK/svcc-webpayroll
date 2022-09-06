<?php
session_start();
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


    
       
        include_once 'controller/db_config.php';
        $_SESSION['emp_type'];
?>

    <head>
        <title>Web-Payroll | Employee</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
        <!-- Toastr -->
        <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <style>
        .svcc {
            background-color: #800000;
            color: #fff;
        }
        </style>

    </head>
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="includes/images/svcc.png" alt="AdminLTELogo" height="140" width="120">
        </div>

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

        <body class="hold-transition sidebar-mini">
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-light-primary elevation-4">
                <!-- Brand Logo -->
                <a href="admin.php" class="brand-link">
                    <img src="includes/images/svcc.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                        style="opacity: .8">
                    <span class="brand-text font-weight-heavy"><b
                            style="margin-left:45px; text-transform: uppercase; ">admin</b></span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <br>

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
                                <a href="admin.php" class="nav-link">
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
            <a href="viewaccounting.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Accounting
              </p>
            </a>
          </li> -->
                                <li class="nav-item  menu-open">
                                <a href="status_admin.php" class="nav-link active">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>
                                    Employee Records
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

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Employee List</h1>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Employee Table</h3>

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

                            <table id="example" class="table  table-bordered table-condensed table-hover text-center"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Employee Number</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php

                           
                              $select = "SELECT * FROM employee WHERE empEnabale = 'disable' ";
                              $resul= mysqli_query($conn, $select);
                              while($row = mysqli_fetch_assoc($resul)){ ?>
                                    <tr>
                                        <td><?php echo $row['empNo']; ?></td>
                                        <td> <?php echo $row['empName']; ?></td>
                                        <td><?php echo $row['empType']; ?></td>
                                        <td><?php echo $row['empEmail']; ?></td>

                                        <td class="text-center" style="width: 150px">
                                        <div class="btn-group">
                                <a href="payslip_record_admin.php?record=<?php echo $row['empId']?>" class="btn btn-outline-primary btn-track"><i
                                                    class="fas fa-book"></i></a>

                                <a href="emp_payroll_history_admin.php?history=<?php echo $row['empId']?>" class="btn btn-outline-primary btn-flat"><i
                                                    class="fas fa-list"></i></a>

                                            <!-- <a href="javascript:void(0)" class="btn btn-outline-primary btn-track"><i class="fas fa-eye"></i></a> -->
                                <a href="payslip_admin.php?pay_id=<?php echo $row['empId']?>"

                                                class="btn btn-outline-primary btn-flat"><i class="fas fa-file"></i></a>
                                <a href="update_admin.php?update_id=<?php echo $row['empId']?>"

                                                class="btn btn-outline-primary btn-flat"><i class="fas fa-edit"></i></a>
                                <a href="controller/enable.php?delete=<?php echo $row['empId']?>"
                                
                                                class="btn btn-outline-primary btn-track btn-del"><i
                                                    class="fas fa-minus-circle"></i></a>
                                        </div>

                                    </td>

                                    <?php 
                                
                                    
                                    }
                      
                        ?>
                                </tbody>
                            </table>
                            <?php if (isset($_GET['m'])) : ?>
                            <div class="flash-data" data-flashdata="<?= $_GET['m']; ?>"></div>
                            <?php endif; ?>

                        </div>

                            <!-- /.card -->
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>
                <!-- /.content -->
            </div>


            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
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
                                        placeholder="Enter Employee Number">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Employee Name</label>
                                    <input type="text" class="form-control" name="emp_name"
                                        placeholder="Enter Employee Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Employee Email</label>
                                    <input type="text" class="form-control" name="emp_email"
                                        placeholder="Enter Employee Email">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Employee Position</label>
                                    <input type="text" class="form-control" name="emp_position"
                                        placeholder="Enter Employee Position">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Employee Type</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="emp_type">
                                        <option value="employee">Employee</option>
                                        <option value="accounting">Accounting</option>
                                        <option value="admin">Admin</option>
                                    </select>
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
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" name="submit"> </input>
                        </div>
                        </form>
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
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="plugins/toastr/toastr.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
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
        $(function() {
            $("#example").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example_wrapper .col-md-6:eq(0)');
        });
    </script>

    </html>