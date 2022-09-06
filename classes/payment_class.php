<?php
session_start();

		 			
               include_once 'data.php';
			   include_once 'error.php';

                       
			class UpdatePayment{
							
						public function Update_pay()
						{
							
					
				            $data = new Database;
							$message = new Message;
							 $emp_id =  $_SESSION['id'];
							date_default_timezone_set('Asia/Manila');
							$date = date("m-d-Y");
							$status = "Received";

						

									
							

									


											$update = " UPDATE payslip SET dateReceived = '$date' , status = 'Received'  WHERE empId = '$emp_id' ";
							
											if($data->update($update)){
												
												$message->message_up("payment received", "../employee.php");
											}

										

								
									
									
									
								

                        	
						} 
						
					}
					

			



?>