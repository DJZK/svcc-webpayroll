<?php
session_start();
       // include_once 'classes/email_ch.php';
        //include_once 'get_ip.php'; 
        //include_once 'base_64.php'; 
        //include 'classes/SetPayrollDate.php';
       //include_once 'controller/db_config.php';
     //   $date_coverd = date("d");
       // echo "date".$date_coverd;
      //include_once 'classes/email_body.php';
       //include_once 'classes/payslip_class.php';
       include_once 'controller/data.php';


     // include_once 'classes/view.php';

        //$fdate = date("d", strtotime("first day of this month"));
        //echo "<br>fdate".$fdate;

        //$ldate = date("d", strtotime("last day of this month"));
        //echo "<br>ldate".$ldate."<br>";

       // if($date_coverd < 16){
           //$data = $fdate."1-5";
        //}else{
         //$data = "1-".$ldate;

        //}

        //echo $data;
?>

<br>

<br>
<br>
<br>
<br>

<?php



//$date = date("Y-m-d");// current date

//echo "<br>". $date = strtotime(date("Y-m-d", strtotime($date)) . " +1 day");
//echo "<br>".$date = strtotime(date("Y-m-d", strtotime($date)) . " +2 week");
//echo "<br>".$date = strtotime(date("Y-m-d", strtotime($date)) . " +1 month");
//echo "<br>".$date = strtotime(date("Y-m-d", strtotime($date)) . " +30 days");  ?>


<br>

<br>
<br>
<br>
<br>


 <?php  

//$date = new DateTime();
//$last_date = calculateValidPayrollDate( getLastDayOfMonth ($date) );
 //echo $mid_month."<br>";
 //echo $last_date;


 
  //$ip = new Ip();
 // $ip->update_ip($empid);
                                
     

     
      //$base_64 = new base_64();
      //$key = $base_64->key();

     
      //$data = new Database();
      //$info  = " SELECT  * FROM employee";
     // $select =$data->select($info); 
      //while ($row = mysqli_fetch_assoc($select)){

       // echo   $base_64->decryptthis( $data = $row['empNo']).'<br>';
       // echo '<br>';
        // echo '<br>';
      //echo  $base_64->decryptthis($row['empPassword']);
       

               
                //echo 'lock:';echo $emp_no = $row['empName'];
               // echo '<br> unlock: '.$test = $base_64->decryptthis($id);
        

           
      //}


     
      //echo $data=  $base_64->encryptthis("burat");

//$emailBody = new EmailBody();

//$emailBody->account_sent("prince","1","123", 'pjesteves15@gmail.com');
   

//$view = new View();

   
 
 //$data =  $view->view_id_list("row","employee", "empName");

//$id =   $view->view_id_list("empId");
//echo "<br>";
//$name =   $view->view_id_list("empName");



        

       // $select = "SELECT SUM FROM payroll";
      //$filter = mysqli_query($conn , $select);
      //$data = mysqli_fetch_assoc($filter); 
    //  echo $data['netPay'];

    //$emailch = new Emailch();
   // $emailch->email_ch("93");
   //$insert = "INSERT INTO payroll (empId, monthly, grossPay) VALUES ('93', '500', '500')"; 
   
  // $test =   $msq = mysqli_query($conn, $insert);

   //if($test){

     // $last_id = $conn->insert_id;
      //echo $last_id;
  // }

 //echo $_SESSION['lid'];
 //echo substr("Hello world",0,1)."<br>";
   // $select = "SELECT * FROM employee ";
   // $data = new Database();

   // $view = $data->select($select);

   // while($row = mysqli_fetch_assoc($view)){
    
    //  if($row['empNo'] >= 1001){
      
       // echo "<br>".$sub = substr($row['empNo'],0,3);
     //  $sub = substr($row['empNo'],0,3);
      //  if($sub == 601){
         // echo "<br>".$sub = substr($row['empNo'],0,3);
       ///   echo"<br>" .$row['empNo'];
        ///  echo"<br>" .$row['empName']."<br>";

    //    }
    //  }

   // }
  $data = new Database();
    $test = "SELECT * FROM session_records";
    $test2 = $data->select($test);   
    
    while($row = mysqli_fetch_assoc($test2)){
    echo"<br>".$row['empId']. "<br>";
    echo "<br>".$row['ipAddress'];
    }
 ?>

 


