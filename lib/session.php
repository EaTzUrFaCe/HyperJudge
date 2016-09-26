<?php

class Session {

	 public $_vars = array();

	public function Get($var, $default='', $erase=false) {
		if (isset($_SESSION[$var])) {
			$tmp = $_SESSION[$var];
			if ($erase) unset($_SESSION[$var]);
			return $tmp;
		} else {
			return $default;
		}
	}

	public function Set($var, $value) {
		$_SESSION[$var] = $value;
	}
}
