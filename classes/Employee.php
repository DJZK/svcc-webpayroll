<?php

// $filepath = realpath(dirname(__FILE__));

// include_once ($filepath . './../lib/database.php');

// class Employee{
//     private $db;
//     private $fm; 

//     public function __construct() {
//         $this->db = new Database();
    
//     }
//     public function employee_login($data) {
//         $emp_name    = $this->fm->validation($data['emp_name']);   // validation
//         $emp_password = $this->fm->validation($data['emp_password']);// validation
        
//         $emp_name    = mysqli_real_escape_string($this->db->link, $data['emp_name']);
//         $emp_password = mysqli_real_escape_string($this->db->link, $data['emp_password']);

        
//         $query = "SELECT * FROM employee WHERE emp_uname = '$emp_name' AND emp_pass = '$emp_password'";
//         $checkUser = $this->db->select($query);
//         if($checkUser){
//             $emp_name_query = "SELECT * FROM employee WHERE emp_uname = '$emp_uname'";
//             $check_emp_name = $this->db->select($emp_name_query);
//                 if($check_emp_name){
//                     $emp_pass_query = "SELECT * FROM employee WHERE emp_pass = '$emp_password'";
//                     $result = $this->db->select($emp_pass_query);
                    
//                     if($result){
//                         $value = $result->fetch_assoc();
//                         $_SESSION['emp_login'] = TRUE;         
//                         $_SESSION['emp_name']  = $value['emp_name'];
//                         $_SESSION['emp_pass']  = $value['emp_pass'];
//                         header('Location: employee.php');
                        
//                         }else{
//                         $msg = "<span style = 'color:red;font-weight:bold'>Password not matched!!</span>";
//                         return $msg;
//                         }
                    
//                     }else{
//                     $msg = "<span style = 'color:red;font-weight:bold'>Email not matched!!</span>";
//                     return $msg;
//                     }
//         }else{
//            $msg = "<span style = 'color:red;font-weight:bold'>Sorry,You are not registered!!</span>";
//            return $msg; 
//     }
    

//     }


// }

?>