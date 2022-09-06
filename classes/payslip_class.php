<?php

include_once '../controller/data.php';
include_once "email_body.php";
include_once 'error.php';
        class Payslip{



            public function user_payslip($id, $payrollid){

                
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "payroll";
        $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name) or die("Data base error");        
                                                $data = new Database();
                                                $message = new Message();

                date_default_timezone_set('Asia/Manila');
                $date_coverd = date('d');
                $fdate = date("d", strtotime("first day of this month"));
                $ldate = date("d", strtotime("last day of this month"));
     

                    if($date_coverd < 16){

                        $date = $fdate."-15";
                        
                    }else{

                        $date = "16-".$ldate;

                        }
                        
                        
                        $date;
                       
                         $date_send = date('m-d-Y');

        $insert = "INSERT INTO payslip (empId, payrollId, dateCovered, dateSent, status) VALUE ('$id', '$payrollid' ,'$date', '$date_send' ,'Not Received')";  
        $data_insert =  mysqli_query($conn,$insert);                
        $last_id = $conn->insert_id;
     
       
      // $history =  $data->insert($insesrt_payslip);

        
        
               } 



        
                public function user_Payroll($id,
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
                                                $honorarium_allowance,
                                                $netPay
                                                ){
                    
                                     
                             
        
    
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "payroll";
        $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name) or die("Data base error");        
                                               $data = new Database();
                                                
                                               $message = new Message();
                                               
                                              $email = new EmailBody();
                                              
                                               
                                        


                                              $filter = "SELECT * FROM payslip WHERE empId =  '$id'  && status = 'Not Received'";
                                              $data = new Database();

                                              if($data->select($filter)){


                                                $error = new Message();
                                                $error->message_up("Employee not Recsived Yet payment", "../emprolls.php");

                                              }else{
                                                $insert = "INSERT INTO payroll (empId, 
                                                monthly,
                                                grossPay,
                                                absent,
                                                lessAbsent,
                                                retroactivePay,
                                                sss,
                                                pagIbig,
                                                c_a,
                                                tuitionFee,
                                                uniform,
                                                csb,
                                                totalDeduction,
                                                honorarium_allowance,
                                                netPay) VALUES ('$id', 
                                                                 '$monthly',
                                                                 '$salary_gross',
                                                                 '$absent',
                                                                 '$less_absent',
                                                                 '$retroactivePay',
                                                                 '$sss',
                                                                 '$pagibig',
                                                                 '$c_a',
                                                                 '$tuitionfee',
                                                                 '$uniform',
                                                                 '$csb',
                                                                 '$totaldeduction',
                                                                 '$honorarium_allowance',
                                                                 '$netPay')";

                                                      
                                            
                                            $data_insert =  mysqli_query($conn,$insert);
                                            $last_id = $conn->insert_id;
                                           
                                    if($data_insert){
                    
                                        $this->user_payslip($id,  $last_id);

                                        $filter_mail = "SELECT * FROM employee WHERE empId = '$id' ";
                                        $mail_filter = $data->select( $filter_mail);

                                        $row = mysqli_fetch_assoc($mail_filter);
                                        $emp_mail = $row['empEmail'];
                                        $emp_name = $row['empName'];
                                        $email->payslpit_sent($emp_mail,  $emp_name);
                                    }
                                       $message->message_up("Payroll added", '../emprolls.php');
                                      
              
                                              }
                                           
                                            
                                           
                                        }
                                          
                                                       
                                              

                                                   
          
        }

       


?>

                                                     