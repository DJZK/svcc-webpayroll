<?php


	include_once 'controller/data.php';
	include_once 'base_64.php'; 
	class login{



		function login_user($emp_no, $emp_pass){
			$data =  new Database();
			$base_64 = new base_64();
			$select = " SELECT * FROM employee ";
			$select_data = $data->select($select);


			while($row = mysqli_fetch_assoc($select_data)){


				$empno =  $base_64->decryptthis($row['empNo']);

				$emppass =  $base_64->decryptthis($row['empPassword']);

				if ($empno == $emp_no && $emppass == $emp_pass) {
					

					$type = $base_64->decryptthis($row['empType']);
				}

			}



		                     }


	}
	

?>