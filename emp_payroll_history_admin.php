
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

$id =  $_GET['history'];
$connect = mysqli_connect("localhost", "root", "", "payroll");  
$sql = "SELECT * FROM employee INNER JOIN payroll ON employee.empId  = payroll.empId ";  
$result = mysqli_query($connect, $sql);  
?> 
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
<body class="hold-transition">


<div class="content">
  <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1>Employee Payroll History</h1>
              </div>

          </div>
      </div><!-- /.container-fluid -->
  </section>

    <!-- Main content -->
<section class="content">
<div class="card card-outline card-primary">
  <div class="card-header ">
      
      <h3 class="card-title">Payroll History</h3>
      
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

          <table id="example" class="table  table-bordered table-condensed table-hover text-center">
              <thead>
      <tr>
        <th>Employee ID</th>
        <th>Employee Name</th>
        <th>Monthly</th>
        <th>GrossPay</th>
        <th>LessAbsent</th>
        <th>retroactivePay</th>
        <th>PagIbig</th>
        <th>C/A</th>
        <th>tuitionFee</th>
        <th>CSB</th>
        <th>TotalDeduction</th>
        <th>Honorarium_allowance</th>
        <th>NetPay</th>
      </tr>
              </thead>
              <tbody>
      <?php  
                    if(mysqli_num_rows($result) > 0)  
                    {  
                         while($row = mysqli_fetch_array($result)) {
                         if($id == $row['empId']) {
                          
                    ?> 
                  <tr>
                   
                   <td><?php  echo $row['empId'];?></td>
                   <td><?php  echo $row['empName'];?></td>
                   <td><?php  echo $row['retroactivePay'];?></td>
                   <td><?php  echo $row['sss'];?></td>
                   <td><?php  echo $row['pagIbig'];?></td>
                   <td><?php  echo $row['c_a'];?></td>
                   <td><?php  echo $row['tuitionFee'];?></td>
                   <td><?php  echo $row['tuitionFee'];?></td>
                   <td><?php  echo $row['uniform'];?></td> 
                   <td><?php  echo $row['csb'];?></td> 
                   <td><?php  echo $row['totalDeduction'];?></td> 
                   <td><?php  echo $row['honorarium_allowance'];?></td>
                   <td><?php  echo $row['netPay'];?></td>
                   </tr> 
      <?php  
                         }
}  
}  
?> 
</tbody>
    </table>
    </div>
  
  <!-- /.row -->
<!-- /.card-body -->
</div>
<!-- /.card -->
</section>
<!-- /.content -->

  

</div>




<!-- Main Footer -->
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


</html>