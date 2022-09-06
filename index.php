

<?php

include "controller/login.php";
?>
<!DOCTYPE html>
<html>


<head>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SVCC | Web-Payroll</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
 
</head>
</head>
<body class="hold-transition login-page">
		   

<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary" >
  	<div class="card-header text-center">
      <img src="includes/images/svcc.png"width="125" height="135">
    </div>
    <div class="card-header text-center">
      <a href="index.php" class="h1"><b>Login</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form id="formLogin" method="post" >


        <div class="input-group mb-3">
          <input type="text" id="emp_no" name="emp_no" class="form-control" placeholder="Employee Number" required value="<?php
                                                                                                                 if(isset( $_SESSION['emp_no'])){
                                                                                                                   echo  $_SESSION['emp_no'];
                                                                                                                 }else{
                                                                                                                   echo "";
                                                                                                                 }         
          ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="emp_pass" name="emp_pass" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
         
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" value="Login" name="submit" class="btn btn-primary btn-block"  onclick="message_popUp()">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
<script>
                
                function message_popUp(){

                   swal("Good job!", "You clicked the button!", "success");

                }

            </script>
	</body>
  <!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

</html> 