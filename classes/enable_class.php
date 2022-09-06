<?php

include_once 'data.php';
include_once 'delete_class.php';
include_once 'error.php';

    $message = new Message();

    $data = new Database();


    $id = $_GET['delete'];
           
    $dis = "enable";

            $update = "UPDATE employee SET empEnabale  = '$dis' WHERE empId= '$id' ";
            $test = $data->update($update);
            if($test){
                $message->message_up("Employee has been back in the active records", "../viewemployee.php");
        }
?>