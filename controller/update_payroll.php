<?php

include_once '../classes/update_class.php';
include_once 'db_config.php';

if(isset($_POST['submit'])){
  $id =  $_POST['id'];

    $monthly = mysqli_real_escape_string($conn, $_POST['monthly']);

    $grosspay  = mysqli_real_escape_string($conn, $_POST['grosspay']);

    $lessAbsent  = mysqli_real_escape_string($conn, $_POST['lessAbsent']);

    $retroactivePay =  mysqli_real_escape_string($conn, $_POST['retroactivePay']);

    $sss   = mysqli_real_escape_string($conn, $_POST['sss']);

    $pagibig    = mysqli_real_escape_string($conn, $_POST['pagIbig']);
    
    $c_a   = mysqli_real_escape_string($conn, $_POST['c_a']);
    
    $tuitionFee    = mysqli_real_escape_string($conn, $_POST['tuitionFee']);

    $uniform    = mysqli_real_escape_string($conn, $_POST['uniform']);

    $csb    = mysqli_real_escape_string($conn, $_POST['csb']);
    
   $totalDeduction = mysqli_real_escape_string($conn, $_POST['totalDeduction']);
    

    $honorarium_allowance  = mysqli_real_escape_string($conn, $_POST['honorarium_allowance']);
    
    $netPay = mysqli_real_escape_string($conn, $_POST['netPay']);
   
    $update = new Update();
   $update->update_data_payroll($monthly, $grosspay, $lessAbsent,
    $retroactivePay, $sss, $pagibig, $c_a, $tuitionFee,$uniform, $csb, $totalDeduction, $honorarium_allowance,$netPay,$id);

}

?>