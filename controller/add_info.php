<?php

			//include_once 'controller/db_config.php';
			include_once 'classes/add_employee.php';
			if(isset($_POST['submit'])){

				
				$emp_no = $_POST['emp_no'];
				$emp_name = $_POST['emp_name'];
				$emp_type = $_POST['emp_type'];;
				$emp_email = $_POST['emp_email'];
				$emp_designation = $_POST['emp_designation'];
				$emp_department = $_POST['emp_department'];
				$emp_status = $_POST['emp_status'];
				$rand = rand(10000000,20000000);
				$emp_pass =  $rand;
				$_SESSION['no'] = $emp_no;
				$add_enployee = new AddEmployee();
				$add_enployee->add_employee($emp_no,
											$emp_name,
											$emp_pass,
											$emp_email,
											$emp_type,
											$emp_department,
											$emp_status,
											$emp_designation

				                           
											
											


											
										
											
										);
				
}