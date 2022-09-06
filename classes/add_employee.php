<?php
include_once 'base_64.php';
include_once 'controller/data.php';
include_once 'classes/error.php';
include_once 'email_body.php';


class AddEmployee{


        public function add_employee($emp_no,
                                     $emp_name,
                                     $emp_pass,
                                     $emp_email,
                                     $emp_type,
                                     $empDepartment,
                                     $empStatus,
                                     $empDesignation	 
                                     
                                   

                                     ){
                $direct = new Message();                           
                 $data = new Database();
                 $message  = new Message();
                 $email = new EmailBody();
                 
               $filter = "SELECT * FROM employee WHERE empNo = '$emp_no' ";
                $data_filter = $data->select($filter);
                            if($data_filter){
                               
                                $message->message_up("Employee Number Already exist", "emplist.php");
                                exit();
                                            
                                            
                            }else{
                         $insert = "INSERT INTO employee (empNo,
                                                         empName,
                                                         empPassword,
                                                         empEmail,
                                                         empType,
                                                         empDepartment,
                                                         empStatus,
                                                         empDesignation,
                                                         empEnabale	
                                                         
                                                         ) VALUES ('$emp_no', 
                                                                   '$emp_name',
                                                                   '$emp_pass',
                                                                   '$emp_email',
                                                                   '$emp_type',
                                                                   '$empDepartment',
                                                                   '$empStatus',
                                                                   '$empDesignation',
                                                                   'enable'

                                                                    
                                                                    

                                                                                
                                                                                 )";
                                     $data_insert = $data->insert($insert);   
                                    if($data_insert){
                                       
                                   $email->account_sent($emp_name, $emp_no, $emp_pass, $emp_email);
                                   $direct->message_up("Employee added successfully", "emplist.php"); 
                                                
                                   
                                 
                                                }
                                       exit();
                                              

                                        
                

                        
                   
                       
                           
                           
                          
                           
                                    }
                        
            
                                    


                                }
       
        }




    


?>