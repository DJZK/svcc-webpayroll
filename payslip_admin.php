<?php


      
            include 'classes/SetPayrollDate.php';
            session_start();
            if($_SESSION['emp_type'] != "admin"){
                header("Location: index.php");
                session_destroy();
                exit();
      
        }
      
        if(!isset($_SESSION['emp_type'])){
          header("Location: index.php");
          session_destroy();
          exit();
        }
          

?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition">

    <div class="content">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Payslip Form</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Paylsip</h3>
                        <div class="card-tools">
                            
                            <p class="card-title">
                                <?php
                  // $date_now = date('d');
                  // if($date_now < 16){
                  //   echo $mid_month;
                  // }else{
                  //   echo $last_day_of_month;
                  // }
                ?>
                            </p>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="controller/payslip_controller.php">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                  <input type ="hidden" name="id" value="<?php echo $_GET['pay_id']?>">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Salary Gross:</label>
                                        <input type="text" readonly="readonly" name="salary_gross" class="form-control"
                                            id="gross_pay" placeholder="Salary Gross">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Monthly:</label>
                                        <input type="text" onkeyup="gross();"  name="monthly" class="form-control"
                                            id="monthly" placeholder="Monthly" min="0.01" step="0.01" max="2500" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Honorarium/Allowance:</label>
                                        <input type="text" onkeyup="deduction();" name="honorarium" class="form-control"
                                            id="allowance" placeholder="Allowance" required>
                                    </div>
                                </div>
                            </div>

                            <h4>Deductions</h4>
                            <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Absent:</label>
                                        <input type="text" onkeyup="get_less_absent();" name="absent" class="form-control"
                                            id="absent" placeholder="Absent" required>
                                    </div>
                            <div class="row">
                            
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Less absent:</label>
                                        <input type="text" readonly="readonly" onkeyup="deduction();" readonly="readonly" name="less_adsent" class="form-control"
                                            id="less_absent" placeholder="Less Absent">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">SSS:</label>
                                        <input type="text" onkeyup="deduction();" name="sss" class="form-control" id="sss"
                                            placeholder="SSS" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">C/A:</label>
                                        <input type="text" onkeyup="deduction();" name="c/a" class="form-control" id="c_a"
                                            placeholder="C/A" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Retroactive Pay:</label>
                                        <input type="text" onkeyup="deduction();" name="retroactivePay" class="form-control"
                                            id="retroactive_pay" placeholder="Retroactive Pay" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Uniform:</label>
                                        <input type="text" onkeyup="deduction();" name="uniform" class="form-control"
                                            id="uniform" placeholder="Uniform" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Pag-Ibig:</label>
                                        <input type="text" onkeyup="deduction();" name="pagibig" class="form-control"
                                            id="pag_ibig" placeholder="Pag-Ibig" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">CSB:</label>
                                        <input type="text" onkeyup="deduction();" name="csb" class="form-control" id="csb"
                                            placeholder="CSB" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tuition Fee:</label>
                                        <input type="text" onkeyup="deduction();" name="tuitionfee" class="form-control"
                                            id="tuition_fee" placeholder="Tuition Fee" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">TOTAL DEDUCTION:</label>
                                        <input type="text" onkeyup="deduction();" readonly="readonly" name="totaldeduction" class="form-control"
                                            id="total_deduction" placeholder="Total Deduction">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">NET PAY:</label>
                                        <input type="text" readonly="readonly" name="netPay" class="form-control"
                                            id="net_pay" placeholder="Net pay">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <input type="submit" name="submit" class="btn btn-primary">
                            <a href="emplist.php" class="btn btn-default float-right">Cancel</a>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

        <script>
          // CALCULATE GROSSPAY, GROSS PAY = monthly / 2 
          function gross(){
            var monthly = document.getElementById('monthly').value;
            var gross_pay = parseInt(monthly) / 2;
            
            // DISPLAY GROSSPAY
            if(!isNaN(gross_pay)){
              document.getElementById('gross_pay').value = gross_pay;
              console.log(gross_pay);
            }
        }
        // CALCULATE TOTAL DEDUCTION, TOTAL DEDUCTION = sss + pag_ibig + c_a + tuition_fee + uniform + csb 
        function deduction(){
          // Get all element by id 
          var sss = document.getElementById("sss").value;
          var pag_ibig = document.getElementById('pag_ibig').value;
          var c_a = document.getElementById('c_a').value;
          var tuition_fee = document.getElementById('tuition_fee').value;
          var uniform = document.getElementById('uniform').value;
          var csb = document.getElementById('csb').value;

          var less_absent = document.getElementById('less_absent').value;
          var retroactive_pay = document.getElementById('retroactive_pay').value;
          var allowance = document.getElementById('allowance').value;

          // Calculate total deduction
          var total_deduction = parseInt(sss) + parseInt(pag_ibig) + parseInt(c_a) + parseInt(tuition_fee) + parseInt(uniform) + parseInt(csb);
          var net_pay = parseInt(less_absent) + parseInt(retroactive_pay) - parseInt(total_deduction) + parseInt(allowance);
         
          // DISPLAY TOTAL DEDUCTION
          if(!isNaN(total_deduction)){
            document.getElementById('total_deduction').value = total_deduction;
            console.log("TOTAL DEDUCTION:" + total_deduction);
            document.getElementById('net_pay').value = net_pay;
            console.log("NET PAY:" + net_pay);
          }
          // if(!isNaN(net_pay)){  
          //     document.getElementById('net_pay').value = net_pay;
          //     console.log(net_pay);
          //   }
        }
        // CALCUTE LESS ABSENT, LESS ABSENT = gross_pay - absent
        function get_less_absent(){
          var gross_pay = document.getElementById('gross_pay').value;
          var absent = document.getElementById('absent').value;
          var less_absent = parseInt(gross_pay) - parseInt(absent);

          // DISPLAY LESS ABSENT
          if(!isNaN(less_absent)){
            document.getElementById('less_absent').value = less_absent;
            console.log(less_absent);
          }
        }
        // CALCULATE NET PAY, NET PAY = less_absent + retroactive_pay - total_deduction + honorarium_allowances
        // function get_net_pay(){ 
          // var less_absent = document.getElementById('less_absent').value;
          // var retroactive_pay = document.getElementById('retroactive_pay').value;
          // var total_deduction = document.getElementById('total_deduction').value;
          // var allowance = document.getElementById('allowance').value;

        //   // NET PAY CALCULATE
        //   var net_pay = parseInt(less_absent) + parseInt(retroactive_pay) - parseInt(total_deduction) + parseInt(allowance);

        //   if ( $("#total_deduction").val().length == 0) {
        //       // do something
        //       // DISPLAY NET PAY
        //     if(!isNaN(net_pay)){  
        //       document.getElementById('net_pay').value = net_pay;
        //       console.log(net_pay);
        //     }
        //   }
        //   // DISPLAY NET PAY
        // }

     
        
        </script>
        <script>
            function setInputFilter(textbox, inputFilter) {
            ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
                textbox.addEventListener(event, function() {
                if (inputFilter(this.value)) {
                    this.oldValue = this.value;
                    this.oldSelectionStart = this.selectionStart;
                    this.oldSelectionEnd = this.selectionEnd;
                    
                } else if (this.hasOwnProperty("oldValue")) {
                    this.value = this.oldValue;
                    this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                } else {
                    this.value = "";
                }
                });
            });
            }
            setInputFilter(document.getElementById("absent"), function(value) 
            {
                return /^-?\d*$/.test(value); 
            });
            setInputFilter(document.getElementById("allowance"), function(value) 
            {
                return /^-?\d*$/.test(value); 
            });
            setInputFilter(document.getElementById("monthly"), function(value) 
            {
                return /^-?\d*$/.test(value); 
            });
            setInputFilter(document.getElementById("monthly"), function(value) 
            {
                return /^-?\d*$/.test(value); 
            });
            setInputFilter(document.getElementById("sss"), function(value) 
            {
                return /^-?\d*$/.test(value); 
            });
            setInputFilter(document.getElementById("c_a"), function(value) 
            {
                return /^-?\d*$/.test(value); 
            });
            
            setInputFilter(document.getElementById("uniform"), function(value) 
            {
                return /^-?\d*$/.test(value); 
            });
            setInputFilter(document.getElementById("retroactive_pay"), function(value) 
            {
                return /^-?\d*$/.test(value); 
            });
            setInputFilter(document.getElementById("pag_ibig"), function(value) 
            {
                return /^-?\d*$/.test(value); 
            });
            setInputFilter(document.getElementById("csb"), function(value) 
            {
                return /^-?\d*$/.test(value); 
            });
            setInputFilter(document.getElementById("tuition_fee"), function(value) 
            {
                return /^-?\d*$/.test(value); 
            });
        </script>

    </div>

   


    <body>
        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- bs-custom-file-input -->
        <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>

</html>