<?php


    include_once 'controller/db_config.php';


        if(isset($_POST['send'])){

            date_default_timezone_set('Asia/Manila');
            $date = date('d/m/Y ');
            $emp_no = mysqli_real_escape_string($conn, $_POST['emp_no']);
            $salary = mysqli_real_escape_string($conn, $_POST['salary']);
            $date = mysqli_real_escape_string($conn, $date);
            $status =  mysqli_real_escape_string($conn, "not received");
          
           
            $check  = "SELECT * FROM salary WHERE emp_no_salary = '$emp_no' ";
            $mysqli = mysqli_query($conn, $check);
            if (mysqli_fetch_assoc($mysqli)) {
                

                echo "

                      <script>
                      

                                      alert ('Payroll already send');

                      </script>  



                        ";
                
                
            }else{


                $data = "SELECT * FROM employee  " ;
                $mysqli  = mysqli_query($conn, $data) or die("error select");
                while($row = mysqli_fetch_assoc($mysqli)){
                    if($row['emp_no']==$emp_no){

                    $id = $row['id'];

                       $data = "INSERT INTO salary (emp_no_salary, 
                                                    total_salary, 
                                                    date_sent, 
                                                    status, 
                                                    emp_id) VALUES ('$emp_no', 
                                                                    '$salary', 
                                                                    '$date', 
                                                                    '$status',
                                                                     '$id')" or die("data error");
                       $sqli = mysqli_query($conn, $data); 
                   }

                }


            if($sqli){
                





                

                $select = "SELECT * FROM salary WHERE emp_no_salary = '$emp_no' ";

                $mysqli = mysqli_query($conn, $select);

                if($row = mysqli_fetch_assoc($mysqli)){
                    $salary_id =  mysqli_real_escape_string($conn,$row['salary_id']);



                    $salary_history = "INSERT INTO payroll_history (salary_id, emp_no) VALUES ('$salary_id', '$emp_no')" or die("data error");
                    $sql = mysqli_query($conn, $salary_history);

                                        
                    
                }




                            }
                        }


        }

              


?>