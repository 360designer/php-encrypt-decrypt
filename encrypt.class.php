<?php
	class encrypt {
		const KEY = 'this is my authentication key';

		function doit($string) {
			$encoded = openssl_encrypt($string, "AES-128-ECB", self::KEY); /* Create the encrypted token */
			return strtr($encoded, '+/', '-_'); /* Translate non friendly URL characters to something general */
		}

		function undoit($encoded) {
			$encoded = strtr($encoded, '-_', '+/'); /* Translate back general characters to non friendly URL characters */
			return openssl_decrypt($encoded, "AES-128-ECB", self::KEY); /* Decrypt the token */
		}
	}
?>