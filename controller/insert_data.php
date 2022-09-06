<?php
  include_once 'db_config.php';

if(isset($_POST['submit'])){
    $pass = mysqli_real_escape_string($conn, $rand);
        $emp_no = mysqli_real_escape_string($conn, $_POST['emp_no']);
        $emp_name = mysqli_real_escape_string($conn, $_POST['emp_name']);
        $emp_type = mysqli_real_escape_string($conn, $_POST['type']);
        $date = mysqli_real_escape_string($conn, $date);
      
        date_default_timezone_set('Asia/Manila');
        $date = date('d/m/Y ');
        $msg="";
        $rand = rand(1000000,200000000);

        
        

        $select = "SELECT * FROM employee WHERE emp_pass = '$pass' AND emp_no = '$emp_no'" ;
        $result = mysqli_query($conn, $select);
        
       if(mysqli_fetch_assoc($result)){

        $rand = rand(100000,20000000);
        $pass = mysqli_real_escape_string($conn, $rand);
        
        }else{

          


            $insert_data = "INSERT INTO employee (emp_no, emp_name, emp_pass, date_registered, emp_type) VALUES ('$emp_no', '$emp_name', '$pass', '$date', '$emp_type')" or die("DATA Error");
            
            $result = mysqli_query($conn, $insert_data);
            

               header("Location:accounting.php");
                  exit();
             
              
            }

           
                
                
            
            
          
            
            
            


        }



   

?>