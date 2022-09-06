<?php

    include_once 'db_config.php';
    include_once '../classes/update_class.php';

               if(isset($_POST['submit'])){

                $emp_no = mysqli_real_escape_string($conn, $_POST['emp_no']);
                $emp_name = mysqli_real_escape_string($conn, $_POST['emp_name']);
                $emp_email = mysqli_real_escape_string($conn, $_POST['emp_email']);
                $type = mysqli_real_escape_string($conn, $_POST['type']);
                $id =  mysqli_real_escape_string($conn, $_POST['id']);
                $emp_designation =  mysqli_real_escape_string($conn, $_POST['emp_designation']);

                $update = new Update();
                $update->update_data($emp_no,$emp_name,$emp_email,$type,$emp_designation,$id);
                
                
               }


            
               
      

?>