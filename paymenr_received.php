<?php
include_once 'controller/db_config.php';
	if(isset($_POST['submit'])){


		 			
               

                       
                        	$emp_id =  $_SESSION['emp_id'];
                        	$payment = mysqli_real_escape_string($conn, "Payment Received"); 

                        	$update = " UPDATE payslip SET dateReceived = '$payment'  WHERE payrollId = '$emp_id' ";
                        	$mysqli = mysqli_query($conn,$update);

                        

	}
			



?>