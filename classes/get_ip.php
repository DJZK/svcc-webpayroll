<?php
 

 include_once 'controller/data.php';
 include_once 'mail_send.php'; 

class Ip{

        // Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}


    public function insert_ip($emp_id){


        $data = new Database();
        $ip = $this->get_client_ip();
        date_default_timezone_set('Asia/Manila');
        $time = date('h:i:A');
        $date = date("Y-d-m");
        $query =  "INSERT INTO session_records (ipAddress, loggedAt, lastLog, empId)  VALUES('$ip', '$time', '$date' ,'$emp_id')";
        $data->insert($query); 
    }

    public function update_ip($emp_id){

        $data = new Database();
        $ip = $this->get_client_ip();
       
           

                 $select = "SELECT * FROM employee WHERE empId = '$emp_id' ";
                 $select = $data->select($select);

          while($row= mysqli_fetch_assoc($select)){
        

                    if ($row['empIp_Address'] == "") {
                        


                $update = "UPDATE employee     
                     SET empIp_Address = '$ip' WHERE empId = '$emp_id' ";

                     $data ->update($update);

              


                    }



             
}



       
    

    }


    public function ip_check ($emp_id){

        $ip = $this->get_client_ip();
        $data = new Database();
        $email = new Email();
        $email_send = $_SESSION['emp_email'];
        $massage = "your IP address are change you your device login to another account";
        $subject = "SVCC IT Solution";

        $ip_filter = "SELECT * FROM employee WHERE empId = '$emp_id' ";

       $filter = $data->select($ip_filter);
        $row = mysqli_fetch_assoc($filter);
        if ($row['empIp_Address'] !=  $ip) {
            
                $email->email_send($email_send, $massage, $subject);
        }
    }




}

