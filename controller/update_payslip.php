<?php

    include_once '../classes/update_class.php';

    if(isset($_POST['submit'])){
   
             $id = $_POST['id'];
         $dateCovered = $_POST['dateCovered'];
         $dateSent = $_POST['dateSent'];
     $dateReceived = $_POST['dateReceived'];
         $status = $_POST['status'];

        $update = new Update();
        $update->update_payslip($dateCovered,$dateSent,$dateReceived,$status,$id);
    }

?>