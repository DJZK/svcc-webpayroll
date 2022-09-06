<?php
     session_start();
     if($_SESSION['emp_type'] != "accounting"){
        header("Location: index.php");
        session_destroy();
        exit();

}

if(!isset($_SESSION['emp_type'])){
  header("Location: index.php");
  session_destroy();
  exit();
}
    include_once  'classes/view.php'; 
    echo $id = $_GET['update_id'];
    $view = new View();

?>

<form method = "POST" action="controller/update_payslip.php">

    <input type = "text" value = "<?php echo $id?>" name="id">
    <br>
    <label>dateCovered</label>
    <input type = "text" name = "dateCovered" value = "<?php echo $view->view_id_list("payslip","dateCovered","payslipId ", $id);?>">
    
    <br>
    <label>dateSent</label>
    <input type = "text" name ="dateSent" value = "<?php echo $view->view_id_list("payslip","dateSent","payslipId ", $id);?>">
    <br>
    <label>dateReceived</label>
    <input type = "text" name = "dateReceived" value = "<?php echo $view->view_id_list("payslip","dateReceived","payslipId ", $id);?>">
    <br>
    <label>status</label>
    <select name = "status">

        <option value="<?php echo $view->view_id_list("payslip","status","payslipId ", $id);?>"><?php echo $view->view_id_list("payslip","status","payslipId ", $id);?></option>
        <option value="Received">Received</option>
        <option value="Notreceived">Not Received</option>

    </select>
    
    <input type="submit" name="submit">

   

</form>