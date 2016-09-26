<?php

class Auth {
	
	public function Login($username, $password) {
		$user = self::_GetUser($username);
	}
	
	public function Logout($hash) {
		DB::Erase($hash);
	}
	
	function _MakeHash($password) {
		return password_hash($password, PASSWORD_BCRYPT, ['cost' => Config::Get("Auth.Encryption.Cost")]);
	}
	
	function _VerifyHash($password, $hash) {
		return password_verify($password, $hash);
	}
}