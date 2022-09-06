
<?php

session_start();
include_once 'classes/view.php';
if($_SESSION['emp_type'] != "admin" ){
    header("Location: index.php");
    session_destroy();
    exit();

}

if(!isset($_SESSION['emp_type'])){
header("Location: index.php");
session_destroy();
exit();
}

$view = new View();
if(isset($_GET['update_id'])){

     $emp_id =  $_GET['update_id'];


?>

<head>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>

</head>




    
    <div class="container mt-3">
        <form method="POST" action = "controller/update_controller.php">

        <input type = "hidden" name="id" value="<?php echo $emp_id ?>"> 
            <div class="form-group">
                <label for="empno">Employee No.</label>
                <input class="form-control"type="text" name="emp_no" value="<?php $id =   $view->view_id_list("employee","empNo","empId", $emp_id); ?>" readonly="readonly">
            </div>

            <div class="form-group">
                <label for="empname">Employee Name</label>
                <input class="form-control" type="text" name="emp_name" value="<?php $name =   $view->view_id_list("employee","empName","empId", $emp_id); ?>">
            </div>

            <div class="form-group">
                <label for="empname">Employee Email</label>
                <input class="form-control" type="text" name="emp_email" value="<?php $email =   $view->view_id_list("employee","empEmail","empId", $emp_id); ?>">
            </div>

            <!-- <div class="form-group">
                <label for="usertype">User Type</label>
                <select name="type" class="form-control" >
                        <option value="<?php // $name =   $view->view_id_list("employee","empType","empId", $emp_id); ?>"><?php $name =   $view->view_id_list("employee","empType","empId", $emp_id); ?></option>
                        <option value="employee">Employee</option>
                        <option value="accounting">Accounting</option>
                        
                </select>
            </div> -->

            <div class="form-group">
                <label for="empname">Employee Type</label>
                <input class="form-control" type="text" name="empType" value="<?php $poss =   $view->view_id_list("employee","empType","empId", $emp_id); ?>">
            </div>
            <div class="form-group">
                <label for="empname">Employee Department</label>
                <input class="form-control" type="text" name="empDepartment" value="<?php $poss =   $view->view_id_list("employee","empDesignation","empId", $emp_id); ?>">
            </div>
            <div class="form-group">
                <label for="empname">Employee Status</label>
                <input class="form-control" type="text" name="empStatus" value="<?php $poss =   $view->view_id_list("employee","empStatus","empId", $emp_id); ?>">
            </div>
            
            
                <input class="btn btn-primary" type="submit" name="submit">	

                </form>
    </div>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/js/dataTables.bootstrap4.js'></script>

<?php
}
?>