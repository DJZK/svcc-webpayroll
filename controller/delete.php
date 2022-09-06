<?php

    include_once '../classes/delete_class.php';
    include_once '../classes/error.php';

    if(isset($_GET['delete'])){

      
                $id = $_GET['delete'];

                $delete = new Delete();
                $delete_data = $delete->delete_data("employee", "empId" ,$id);
                $message = new  Message();
                $message->message_up("Data Delete", "../emplist.php");
               

            
    }

    if(isset($_GET['delete_payroll'])){
        
        $id = $_GET['delete_payroll'];

         $delete = new Delete();
       
        $delete->delete_data("payroll", "payrollId" ,$id);
            

        $message = new  Message();
        $message->message_up("Data Delete", "../emprolls.php");

        

    }

    if(isset($_GET['payslip_id'])){
        
        $id = $_GET['payslip_id'];

        $delete = new Delete();
        $delete->delete_data("payslip", "payslipId" ,$id);

        $message = new  Message();
        $message->message_up("Data Delete", "../emppays.php");

    }


?>