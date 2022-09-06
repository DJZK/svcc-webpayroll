
    <?php

 
        include_once 'db_config.php';
        include_once 'classes/login_classes.php';
            if(isset($_POST['submit'])){
                
              $emp_no = mysqli_real_escape_string($conn, $_POST['emp_no']);
              $emp_pass = mysqli_real_escape_string($conn, $_POST['emp_pass']);     
             
                $login = new Login();
                $login->user($emp_no, $emp_pass);
            }
              
                
                ?>
