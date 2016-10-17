<?php
class Vars {
    public static function Get($name, $default = '', $unset = false) {
        return self::_GetFromArray($name, $_GET, $default, $unset);
    }
    public static function Post($name, $default = '', $unset = false) {
        return self::_GetFromArray($name, $_POST, $default, $unset);
    }
    static function _GetFromArray($name, &$array, $default, $unset) {
        if (isset($array[$name])) {
            $var = $array[$name];
            if ($unset) unset($array[$name]);
            return $var;
        }
        return $default;
    }
}
