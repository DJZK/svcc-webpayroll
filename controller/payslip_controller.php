
<?php

include_once '../classes/error.php';

session_start();
include_once 'db_config.php';
include_once 'data.php';
include_once '../classes/payslip_class.php';
if(isset($_POST['submit'])){
        
    
       $id = mysqli_real_escape_string($conn,$_POST['id']);
        $salary_gross = mysqli_real_escape_string($conn,$_POST['salary_gross']);
        $monthly = mysqli_real_escape_string($conn, $_POST['monthly']);
        $absent = mysqli_real_escape_string($conn, $_POST['absent']);
        $less_absent = mysqli_real_escape_string($conn, $_POST['less_adsent']);
        $retroactivePay = mysqli_real_escape_string($conn, $_POST['retroactivePay']);
        $sss = mysqli_real_escape_string($conn, $_POST['sss']);
        $pagibig = mysqli_real_escape_string($conn, $_POST['pagibig']);
        $c_a = mysqli_real_escape_string($conn, $_POST['c/a']);
        $tuitionfee = mysqli_real_escape_string($conn, $_POST['tuitionfee']);
        $uniform = mysqli_real_escape_string($conn, $_POST['uniform']);
        $csb = mysqli_real_escape_string($conn, $_POST['csb']);
        $totaldeduction = mysqli_real_escape_string($conn, $_POST['totaldeduction']);  
        $honorarium = mysqli_real_escape_string($conn, $_POST['honorarium']);   
        $netPay = mysqli_real_escape_string($conn, $_POST['netPay']);
       

      

      
        $payroll = new Payslip();
        $payroll->user_Payroll($id,
                            $monthly,
                            $salary_gross,
                            $absent,
                            $less_absent,
                            $retroactivePay,
                            $sss,
                            $pagibig,
                            $c_a,
                            $tuitionfee,
                            $uniform,
                            $csb,
                            $totaldeduction,
                            $honorarium,
                             $netPay);
                            
        
      
                           
                                                                
                                                               
                                                            
                                                              
}
?>