<?php

class Encrypter {

    private static $pass = 'bbva2021';
	private static $iv = 'BBVA-MARKETPLACE';
	private static $method = 'AES-256-CBC';
	private static $opc = false;

	public static function encode ($input,$filter = []) {

		if (!empty($input)) {

			switch (true) {
				case is_array($input) || is_object($input):

				$input = json_decode(json_encode($input),true);

				array_walk_recursive($input, function (&$item, $clave) use ($filter) {
					if (empty($item)) { return false;}

					if (empty($filter)) {
						$item = base64_encode(openssl_encrypt($item, self::$method, md5(self::$pass), self::$opc,self::$iv));
					}else{

						if (in_array($clave,$filter, true)) {
							$item = base64_encode(openssl_encrypt($item, self::$method, md5(self::$pass), self::$opc,self::$iv));
						}
					}
				});

				break;

				default:

				if (empty($input)) { return false;}

				$input = base64_encode(openssl_encrypt($input, self::$method, md5(self::$pass), self::$opc,self::$iv));

				break;
			}

		}

		return $input;
	}

	public static function decode ($input,$filter = []) {

		if (!empty($input)) {

			switch (true) {
				case is_array($input) || is_object($input):

				$input = json_decode(json_encode($input),true);

				array_walk_recursive($input, function (&$item, $clave) use ($filter) {

					if (empty($item)) { return false;}

					if (empty($filter)) {
						$item = openssl_decrypt(base64_decode($item), self::$method, md5(self::$pass), self::$opc, self::$iv);
					}else{
						if (in_array($clave,$filter, true)) {
							$item = openssl_decrypt(base64_decode($item), self::$method, md5(self::$pass), self::$opc, self::$iv);
						}
					}
				});

				break;

				default:

				if (empty($input)) { return false;}

				$input = openssl_decrypt(base64_decode($input), self::$method, md5(self::$pass), self::$opc, self::$iv);

				break;
			}

		}

		return $input;
	}
}

?>