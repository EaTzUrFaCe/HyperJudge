<?php
class Session {
    public static function Get($var, $default = '', $erase = false) {
        if (isset($_SESSION[$var])) {
            $tmp = $_SESSION[$var];
            if ($erase) unset($_SESSION[$var]);
            return $tmp;
        } else {
            return $default;
        }
    }
    public static function Set($var, $value) {
        $_SESSION[$var] = $value;
    }
}
