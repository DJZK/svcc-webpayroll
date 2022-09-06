
<?php
include_once 'db_config.php';
include_once '../classes/payment_class.php';
	if(isset($_POST['submit'])){


            $update_pay = new UpdatePayment();
            $update_pay->Update_pay();
                        	
    }

?>