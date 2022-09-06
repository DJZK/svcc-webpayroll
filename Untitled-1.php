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
                                                 $last_id;
                                        if($data_insert){
                        
                                            $this->user_payslip($id, $last_id);
                        
            
                                        }
                  
           
                                                //$message->message_up("Payroll added", '../emprolls.php');
                   // }

                                                   // echo "<br>". $row['status'];
                                                    //$error = new Message();
                                                    //$error->message_up("Employee not Recsived Yet payment", "../emprolls.php");
                                                
                      



                                                    $id,
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

                                             ($id,
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
                              $netPay