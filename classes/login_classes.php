<?php

    session_start();

            include 'controller/data.php';
            include 'error.php';
            include_once 'get_ip.php'; 

            class Login{
           
                    
                        public function user($emp_no, $emp){
                            $message = new Message();
                            $data = new Database();
                            
                            $select = "SELECT * FROM employee WHERE empNo = '$emp_no' && empPassword = '$emp' ";
                            $check = $data->select($select);
                        
                           if($check){
                            $row = mysqli_fetch_assoc($check);
                                $_SESSION['id'] = $row['empId'];
                                $_SESSION['emp_type'] = $row['empType'];
                                $_SESSION['name'] = $row['empName'];
                                $_SESSION['emp_email'] = $row['empEmail'];
                                
                                if($row['empType']=="accounting"){
                                  
                                    header("Location: accounting.php");
                            
                                }

                                if($row['empType']=="employee"){
                                    header("Location: employee.php");
                            
                                }

                                if($row['empType']=="admin"){
                                    header("Location: admin.php");
                            
                                }

                                $id =  $_SESSION['id']; 
                                $get_ip = new Ip();
                                $ip =  $get_ip->insert_ip($id);
                                $update = $get_ip->update_ip($id);
                                $check_ip = $get_ip->ip_check($id);



                           }else{
                               $message->message_up("Account Wrong", "index.php");
                           }
                            
                            
                            
                        
                        }
                    
                    
                    }
     

?>