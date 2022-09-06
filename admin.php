<?php
  
session_start();
   

 include_once 'controller/insert_data.php';
 include_once 'classes/get_ip.php'; 
 include_once 'controller/data.php';
 
 
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
<html lang="en" style="height: auto;">
<head>
  <title>Web-Payroll | Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include 'templates/header.php'?>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
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
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <?php include 'templates/adminNav.php'; ?>
    <?php include 'templates/slider.php'; ?>

<!-- <div class="form-group sad text-center">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Add Employee
    </button>
    <a class="btn btn-primary" href="viewemployee.php">View Employee</a>
    <a class="btn btn-primary" href="viewaccounting.php">View Accounting</a>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body">
            <form method = "POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Employee Number</label>
                    <input type="text" class="form-control" name = "emp_no"  placeholder="Enter employee number">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Employee Name</label>
                    <input type="text" class="form-control" name = "emp_name"  placeholder="Enter employee name">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Employee Type</label>
                    <select class="form-control" id="exampleFormControlSelect1" name = "type">
                    <option value="employee">Employee</option>
                    <option value="accounting">Accounting</option>
                    <option value="admin">Admin</option>
                    </select>
                </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit"  class="btn btn-primary" name="submit">  </input>
        </div>
        </form>
    </div>
</div>
</div> -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?php
                        $sql = "SELECT COUNT(*) AS total FROM employee WHERE empType='employee'";
                        $count = 0;
                        if ($result = mysqli_query($conn, $sql)) {
                            $row = mysqli_fetch_row($result);
                            $count = $row[0];
                        }
                        echo $count;
                    ?>
                </h3>
                <p>Users Employee</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="viewemployee.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>
                <?php
                        $sql = "SELECT COUNT(*) AS total FROM employee WHERE empType='accounting'";
                        $count = 0;
                        if ($result = mysqli_query($conn, $sql)) {
                            $row = mysqli_fetch_row($result);
                            $count = $row[0];
                        }
                        echo $count;
                    ?>
                </h3>

                <p>Users Accounting</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="viewaccounting.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3> <?php 
                   $sql = "SELECT COUNT(dateSent) AS total FROM payslip";
                   $count = 0;
                   if ($result = mysqli_query($conn, $sql)) {
                       $row = mysqli_fetch_row($result);
                       $count = $row[0];
                   }
                   echo $count;
                  ?></h3>

                <p>Payslip Sent</p>
              </div>
              <div class="icon">
                <i class="ion ion-filing"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3> <?php 
                   $sql = "SELECT COUNT(dateReceived) AS total FROM payslip";
                   $count = 0;
                   if ($result = mysqli_query($conn, $sql)) {
                       $row = mysqli_fetch_row($result);
                       $count = $row[0];
                   }
                   echo $count;
                  ?></h3>

                <p>Payslip Received</p>
              </div>
              <div class="icon">
                <i class="ion ion-document"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
          
            <!-- Calendar -->
            <div class="card ">
              <div class="card-header border-0 bg-primary">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

        

 

          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
          <div class="card card-row card-default" style="overflow-x:auto;">
          <div class="card-header bg-primary">
            <h3 class="card-title">
              Recent Logged In
            </h3>
            <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
          </div>


          <!--start -->
        
              
             
          
          <div class="card-body">
         
           
                <table id="example" class="table  table-bordered table-condensed table-hover text-center" style="overflow-x:auto;">
                <thead>
                  <tr>
                    <td>Name</td>
                    <td>Ip Address</td>
                    <td>Time</td>
                    <td>Date</td>
                  </tr>
                </thead>
                
                <tbody>
                <?php           
          $data = new Database();
    $test = "SELECT * FROM session_records";
    $test2 = $data->select($test);   
    
    while($row = mysqli_fetch_assoc($test2)){
          $id = $row['empId'];
          $row['ipAddress'];
       $emp_name =   "SELECT * FROM employee WHERE empId = '$id' "; 
       $test3 = $data->select($emp_name);
       $row3 = mysqli_fetch_assoc($test3);
       
           


           
    ?>
                  <tr>
                    <td><?php  echo $row3['empName']; ?></td>
                    <td><?php  echo $row['ipAddress']; ?></td>
                    <td><?php  echo $row['loggedAt']; ?></td>
                    <td><?php  echo $row['lastLog']; ?></td>
                  </tr>
                  <?php }?>
                </tbody>
                </table>

           
          </div>
          
        </div>
      
<!--end-->
              <div class="card-footer bg-transparent">
                <div class="row ">
                  <div class="col-4 text-center ">
                    <div id="sparkline-1"></div>
                    <!-- <div class="text-white">Visitors</div> -->
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <!-- <div class="text-white">Online</div> -->
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <!-- <div class="text-white">Sales</div> -->
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->
 
         


          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</div>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
<?php include 'templates/footer.php'?>
<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
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
</body>
</html>