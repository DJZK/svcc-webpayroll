<?php
        include_once '../controller/data.php';
        include_once 'error.php';
        include_once 'email_body.php';

        class Update{

        // PARANG AWA MO NA ORE PLEASE MAKE IT A HABIT NA COMMENTED EVERY FUNCTIONS AT CODES.

        // FUNCTION FOR UPDATE EMPLOYEE after update redirect to emplist.php
        public function update_data($emp_no, $emp_name,$emp_email,$type,$emp_designation,$id){
                                $data = new Database();
                                $message = new Message();
        $update = "UPDATE employee SET empNo = '$emp_no',
                                       empName = '$emp_name',
                                       empEmail = '$emp_email',
                                       empType = '$type',
                                       empDesignation= '$emp_designation'

        
        WHERE empId = '$id' ";
          

                        
                if( $data->update($update)){
                        $email = new EmailBody();
                        $select = "SELECT * FROM employee WHERE empId  = '$id' ";
                        $update_email = $data->select($select);
                        $row = mysqli_fetch_assoc($update_email);
                        $pass = $row['empPassword']; 
                        $email -> account_sent($emp_name, $emp_no, $pass, $emp_email);
                        
                        $message->message_up('Data Update', "../emplist.php");
                }
                
                                               



                        }
// PARANG AWA MO NA ORE PUT A COMMENT ON YOUR CODE!!!!!!!
// THIS IS FOR UPDATE PAYROLL FUNCTION AFTER UPDATE REDIRECT TO emprolls.php               
public function update_data_payroll($monthly, 
                                         $grosspay,
                                         $lessAbsent,
                                         $retroactivePay,
                                         $sss,
                                         $pagIbig,
                                         $c_a,
                                         $tuitionFee, 
                                         $uniform,
                                         $csb,
                                         $totalDeduction,
                                         $honorarium_allowance, 
                                         $netPay,     
                                         $id){
                                $data = new Database();
                                $message = new Message();
        $update = "UPDATE payroll SET monthly = '$monthly',
                                      grossPay = '$grosspay',
                                      lessAbsent = '$lessAbsent',
                                      retroactivePay = '$retroactivePay',
                                      sss = '$sss',
                                      pagIbig = '$pagIbig',
                                      c_a = '$c_a',
                                      tuitionFee = '$tuitionFee',
                                      uniform = '$uniform',
                                      csb = '$csb',
                                      totalDeduction = '$totalDeduction',
                                      honorarium_allowance = '$honorarium_allowance',
                                      netPay = '$netPay'
                                      



                                                
                                                WHERE payrollId = '$id' ";
          

                        
                if( $data->update($update)){

                       $message->message_up('Data Update', '../emprolls.php');
                }
                
                                               



                        }

      // THIS IS FOR UPDATE PAYSLIP FUNCTION AFTER UPDATE REDIRECT TO emppays.php                      
    public function update_payslip($dateCovered,$dateSent,$dateReceived,$status,$id){
                                $data = new Database();
                                $message = new Message();
        $update = "UPDATE payslip SET dateCovered = '$dateCovered',
                                       dateSent = '$dateSent',
                                       dateReceived = '$dateReceived',
                                       status = '$status'

        
        WHERE payslipId  = '$id' ";
          

                        
                if( $data->update($update)){

                        $message->message_up('Data Update', '../emppays.php');
                }
                
                                               



                        }


        }

?>