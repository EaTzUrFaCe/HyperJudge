<?php

class Vars {
	public static function Get($name, $default = '', $unset = false) {
		if (isset($_GET[$name])) {
			$var = $_GET[$name];
			if ($unset) unset($_GET[$name]);
			return $var;
		}
		return $default;
	}
}
