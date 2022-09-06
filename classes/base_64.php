<?php



  include_once 'controller/data.php';


 class base_64{



 	function key(){

 	  $data = new Database();
      $info  = " SELECT  * FROM base";
      $select =$data->select($info); 
      $row = mysqli_fetch_assoc($select);

        $value = $row['base_key'];
 	} 



    function decryptthis($data)  {

  	$key = $this->key();

	$encryption_key = base64_decode($key);

	list($encrypted_data, $iv) = array_pad(explode('::', base64_decode($data), 2),2,null);

	return openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 0, $iv);

}


	function encryptthis($data) {


	$key = $this->key();
	$encryption_key = base64_decode($key);

	$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-128-cbc'));

	$encrypted = openssl_encrypt($data, 'aes-256-cbc', $encryption_key, 0, $iv);

	return base64_encode($encrypted . '::' . $iv);

}

	



}

?>