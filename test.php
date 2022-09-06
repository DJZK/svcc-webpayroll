
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html> 
  <?php  
 $connect = mysqli_connect("localhost", "root", "", "payroll");  
 $sql = "SELECT * FROM payroll INNER JOIN payslip ON payroll.payrollid  = payslip.payrollId && payslip.status = 'Not Received'";  
 $result = mysqli_query($connect, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Fetch Data from Two or more Table Join using PHP and MySql</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Fetch Data from Two or more Table Join using PHP and MySql</h3><br />                 
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th>Brand Name</th>  
                               <th>Product Name</th>
                               <th>name</th> 
                               <th>sss</th> 
                               <th>pagibig</th> 
                               <th>C/A</th>  
                               <th>tuitionfee</th> 
                                  <th>tuitionfee</th> 
                                     <th>tuitionfee</th> 
                                        <th>tuitionfee</th> 
                                           <th>tuitionfee</th> 
                                              <th>tuitionfee</th> 
                         </tr>  
                          <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result)) {
                                   if($row['payrollId'] == $row['payrollId'] && $row['status'] == "Not Received"){
                                   echo $row['status'];
                                   }
                                
                          ?> 


                         <tr>
                         
                   
                         <td><?php  
                         
                         echo $row['payrollId'];
                         ?></td>

                         </tr>  

                          <?php  

                               }  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>  