<?php
/**
 * ./lib/session.php.
 *
 * @author Matt Hermes <msh160130@utdallas.edu>
 */
class Session
{
    /**
     * @param unknown $var
     * @param unknown $default (optional)
     * @param unknown $erase   (optional)
     *
     * @return unknown
     */
    public static function Get($var, $default = '', $erase = false)
    {
        if (isset($_SESSION[$var])) {
            $tmp = $_SESSION[$var];
            if ($erase) {
                unset($_SESSION[$var]);
            }

            return $tmp;
        } else {
            return $default;
        }
    }

    /**
     * @param unknown $var
     * @param unknown $value
     */
    public static function Set($var, $value)
    {
        $_SESSION[$var] = $value;
    }
}
