<?php
/**
 * ./lib/vars.php.
 *
 * @author Matt Hermes <msh160130@utdallas.edu>
 */
class Vars
{
    /**
     * @param unknown $name
     * @param unknown $default (optional)
     * @param unknown $unset   (optional)
     *
     * @return unknown
     */
    public static function Get($name, $default = '', $unset = false)
    {
        return self::_GetFromArray($name, $_GET, $default, $unset);
    }

    /**
     * @param unknown $name
     * @param unknown $default (optional)
     * @param unknown $unset   (optional)
     *
     * @return unknown
     */
    public static function Post($name, $default = '', $unset = false)
    {
        return self::_GetFromArray($name, $_POST, $default, $unset);
    }

    /**
     * @param unknown $name
     * @param unknown $array   (reference)
     * @param unknown $default
     * @param unknown $unset
     *
     * @return unknown
     */
    public static function _GetFromArray($name, &$array, $default, $unset)
    {
        if (isset($array[$name])) {
            $var = $array[$name];
            if ($unset) {
                unset($array[$name]);
            }

            return $var;
        }

        return $default;
    }
}
