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

        include_once 'controller/data.php';
        $id = $_GET['empid'];
        $data = new Database();
        $select = "SELECT * FROM payslip WHERE payslipId = '$id'";
        $sql = $data->select($select);
     
        $row = mysqli_fetch_assoc($sql);


             $pyroll_id = $row["payrollId"];
            $select_payroll = "SELECT * FROM payroll WHERE payrollId  = '$pyroll_id' ";
            $payroll_data = $data->select($select_payroll);
            $row = mysqli_fetch_assoc( $payroll_data);
            
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SVCC | Web-Payroll</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
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
<body class="hold-transition login-page">


<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary" >
  	<div class="card-header text-center">
                <div class="row text-center">
                        <img class="ml-4" src="includes/images/svcc.png"width="60" height="70">
                        <h6 class="mt-3 ml-3">St. Vincent College of Cabuyao<br>Mamatid, Cabuyao Laguna</h6>
                </div>
        </div>
    <div id="GFG" class="card-body">
        
                 <table class="table" style="width:100%">
                        <tr>
                            <td colspan="2">Monthly:</td>
                            <td class="text-right"><?php echo  $row['monthly']?></td>
                    </tr>
                    <tr>
                            <td colspan="2">SALARY:(Gross)</td>
                            <td class="text-right"><?php echo  $row['grossPay']?></td>
                    </tr>
                    <tr>
                            <td colspan="2">Honorarium/Allowance:</td>
                            <td class="text-right"> <?php echo  $row['honorarium_allowance']?></td>
                    </tr>
                    <tr>
                            <td class="" colspan="2">Retroactive Pay:</td>
                            <td class="text-right"><?php echo  $row['retroactivePay']?></td>
                    </tr>
                    <tr>
                            <td colspan="2">Total Deduction:</td>
                            <td class="text-right"><?php echo  $row['totalDeduction']?></td>
                            <td></td>
                    </tr>
                    <tr>
                            <td class="" colspan="2">SSS:</td>
                            <td class="text-right"><?php echo  $row['sss']?></td>
                    </tr>
                    <tr>
                            <td class="" colspan="2">absent:</td>
                            <td class="text-right"><?php echo  $row['absent']?></td>
                    </tr>
                    <tr>
                            <td class="" colspan="2">lessAbsent:</td>
                            <td class="text-right"><?php echo  $row['lessAbsent']?></td>
                    </tr>
                    <tr>
                            <td class="" colspan="2">pagIbig:</td>
                            <td class="text-right"><?php echo  $row['pagIbig']?></td>
                    </tr>
                    <tr>
                            <td class="" colspan="2">C/A:</td>
                            <td class="text-right"><?php echo  $row['c_a']?></td>
                    </tr>
                    <tr>
                            <td class="" colspan="2">Uniform:</td>
                            <td class="text-right"><?php echo  $row['uniform']?></td>
                    </tr>
                    <tr>
                            <td class="" colspan="2">CSB:</td>
                            <td class="text-right"><?php echo  $row['csb']?></td>
                    </tr>
                    <tr>
                            <td colspan="2">NetPay:</td>
                            <td class="text-right"><?php echo  $row['netPay']?></td>
                            <td></td>
                    </tr>
            </table>

               
        </div>
        <!-- <p>id <?php echo  $row['empId']?></p> -->
   

          <!-- /.col -->
          <div class="col-12">
                <a href="employee.php" class="btn btn-primary btn-block">Back</a>

            <button onclick="printDiv()" class="btn btn-primary btn-block">Print</button>
            <br>
            
          </div>
          <!-- /.col -->


      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
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

</body>
</html>