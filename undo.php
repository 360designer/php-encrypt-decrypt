<?php
	include ('encrypt.class.php');

	$encrypt = new encrypt();
	/* Retrieve the token in order to be decrypted */
	$token = isset($_GET['token']) ? $_GET['token'] : null;
	/* Decrypt the token */
	$params = $encrypt->undoit( $token );
	
?>