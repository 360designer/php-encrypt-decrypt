<?php
	include ('encrypt.class.php');

	$encrypt = new encrypt();
	/* Retrieve all the GET parameters from the URL in order to encrypt thier values */
	$source = json_encode($_GET);
	/* Encrypt all the params into one unique token */
	$token =  $encrypt->doit( $source );
	
?>