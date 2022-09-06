<?php

    include_once 'mail_send.php';


    class EmailBody{


        public function account_sent($emp_name, $emp_no, $emp_pass, $emp_email){
            
            
          $email = new Email();
          date_default_timezone_set('Asia/Manila');
          
          $full_date = date('l j F  Y'." @". ' g:i:a  ');
         
           "<br><br><br>";
             $body = "FROM: svccitsolution@gmail.com <br>
                          Date: ".$full_date."<br>
                          To: ".$emp_email."<br><br>
                         ";
            $extend_body =  "<h1><center>WELCOME TO ST. VINCENT COLLEGE OF CABUYAO</center></h1>
            <br><br><center><b> Hi ".$emp_name." !</b></center><br><br>
            <center>This is from SVCC IT SOLUTION, Please use this account details to login for the svcc payroll website:<br><br>
            <center>Employee Number: ".$emp_no."</center><br>
            <center>Password: ".$emp_pass."</center><br><br>
            <center>Please do not share this personal account to anyone, If you have trouble logging in please contact admin</center><br><br>
            <center>NOTE: Before you can login please make sure to download ZeroTier from Google Play Store</center><br><br>
            <a href = 'https://play.google.com/store/apps/details?id=com.zerotier.one'>For Mobile</a><br> 
            <a href = 'https://download.zerotier.com/dist/ZeroTier%20One.msi'>For Computer</a><br><br>
            AFTER DOWNLOADING YOU CAN LOGIN TO THE SVCC-PAYROLL HERE: 
            <center><a href ='192.168.0.103/web-payroll/' ><button> LOGIN HERE </button></a></center>;" ;
                
           $all_text = $body.$extend_body;
         
       $email->email_send($emp_email,$all_text,"Welcome to SVCC Payroll");
        




        }

        public function payslpit_sent($emp_email, $emp_name){
          
            $email = new Email();
            date_default_timezone_set('Asia/Manila');
            
            $full_date = date('l j F  Y'." @". ' g:i:a  ');
           
             "<br><br><br>";
               $body = "FROM: svccitsolution@gmail.com <br>
                            Date: ".$full_date."<br>
                            To: ".$emp_email."<br><br>
                           ";
                           $extend_body =  "<h1><center>WELCOME TO ST. VINCENT COLLEGE OF CABUYAO</center></h1>
                           <br><br><center><b> Hi ".$emp_name." !</b></center><br><br>
                           <center>This is from SVCC IT SOLUTION, We notify you We sent payslip in your account</center>
                           <center>Please Confrm your payslip to get your Payment</center><br><br>";


                   $all_text = $body.$extend_body;
                   $email->email_send($emp_email,$all_text,"SVCC Payroll");
          
        }


    }
 



?>