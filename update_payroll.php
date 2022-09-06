<?php
session_start();
if($_SESSION['emp_type'] != "accounting" ){
    header("Location: index.php");
    session_destroy();
    exit();

}

if(!isset($_SESSION['emp_type'])){
header("Location: index.php");
session_destroy();
exit();
}
	include_once 'classes/view.php';
	//include_once;
    
	$view = new View();
	

		  $emp_id =  $_GET['update_id'];
          


?>

            <form method = "POST"  action =   "controller/update_payroll.php">



                <input type = "text" name="id" value="<?php echo $emp_id ?>">
                
                <br>
                <label>monthly</label>
                <input type = "text" name="monthly" value="<?php $monthly =   $view->view_id_list("payroll","monthly","payrollId", $emp_id); ?>">
                
                <br>
                <label>grosspay</label>
                <input type = "text" name="grosspay" value="<?php $monthly =   $view->view_id_list("payroll","grossPay","payrollId", $emp_id); ?>">
               
                <br>
                <label>lessAbsent</label>
                <input type = "text" name="lessAbsent" value="<?php $monthly =   $view->view_id_list("payroll","lessAbsent","payrollId", $emp_id); ?>">
               
                <br>
                <label>retroactivePay</label>
                <input type = "text" name="retroactivePay" value="<?php $monthly =   $view->view_id_list("payroll","retroactivePay","payrollId", $emp_id); ?>">
                
                <br>
                <label>sss</label>
                <input type = "text" name="sss" value="<?php $monthly =   $view->view_id_list("payroll","sss","payrollId", $emp_id); ?>">
                
                <br>
                <label>pagIbig</label>
                <input type = "text" name="pagIbig" value="<?php $monthly =   $view->view_id_list("payroll","pagIbig","payrollId", $emp_id); ?>">
                
                <br>
                <label>c_a</label>
                <input type = "text" name="c_a" value="<?php $monthly =   $view->view_id_list("payroll","c_a","payrollId", $emp_id); ?>">
               
                <br>
                <label>tuitionFee</label>
                <input type = "text" name="tuitionFee" value="<?php $monthly =   $view->view_id_list("payroll","tuitionFee","payrollId", $emp_id); ?>">
                
                <br>
                <label>uniform</label>
                <input type = "text" name="uniform" value="<?php $monthly =   $view->view_id_list("payroll","uniform","payrollId", $emp_id); ?>">
                
                <br>
                <label>csb</label>
                <input type = "text" name="csb" value="<?php $monthly =   $view->view_id_list("payroll","csb","payrollId", $emp_id); ?>">
                <br>
                <label>totalDeduction</label>
                <input type = "text" name="totalDeduction" value="<?php $monthly =   $view->view_id_list("payroll","totalDeduction","payrollId", $emp_id); ?>">
                
                <br>
                <label>honorarium_allowance</label>
                <input type = "text" name="honorarium_allowance" value="<?php $monthly =   $view->view_id_list("payroll","honorarium_allowance","payrollId", $emp_id); ?>">
                
                <br>
                <label>netPay</label>
                <input type = "text" name="netPay" value="<?php $monthly =   $view->view_id_list("payroll","netPay","payrollId", $emp_id); ?>">
        
                
                <input type="submit" name="submit">
               
            </from>



