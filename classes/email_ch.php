<?php


        include_once 'controller/data.php';
        include_once 'classes/mail_send.php';
        include_once 'classes/email_body.php';
            class EmailCh{



                    public  function email_ch($id){

                            $email = new Email();
                            $data = new Database();
                            $body = new EmailBody();

                            $filter = "SELECT * FROM employee";
                            $test = $data->select($filter);
                            while($row = mysqli_fetch_assoc($test)){


                                if($row['empEmail'] == "" && $id==$row['empId']){
                                   echo  $mail = $row['empEmail'];
                                    echo $pass = $row['empPassword'];
                                    echo $empNo = $row['empNo'];
                                    echo $empName = $row['empName'];

                                        $body->account_sent($empName, $empNo, $pass, $mail);
                               

                            }

                    }

                    
                }
            }


?>