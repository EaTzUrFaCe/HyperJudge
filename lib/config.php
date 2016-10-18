<?php
/**
 * ./lib/config.php.
 *
 * @author Matt Hermes <msh160130@utdallas.edu>
 */
use Symfony\Component\Yaml\Yaml as _Yaml;

class Config
{
    public static $_CACHE = array();
    public static $_DATA;

    /**
     * @param object  $var
     * @param unknown $default (optional)
     *
     * @return unknown
     */
    public static function Get(string $var, $default = '')
    {
        if (isset(self::$_CACHE[$var])) {
            return self::$_CACHE[$var];
        }
        $segments = explode('.', $var);
        $root = self::$_DATA;
        foreach ($segments as $segment) {
            if (array_key_exists($segment, $root)) {
                $root = $root[$segment];
                continue;
            } else {
                return $default;
            }
        }
        self::$_CACHE[$var] = $root;

        return $root;
    }

    /**
     * @param unknown $var
     * @param unknown $value
     */
    public static function Set($var, $value)
    {
        self::$_CACHE[$var] = $value;
        $segments = explode('.', $var);
        $root = &self::$_DATA;
        foreach ($segments as $segment) {
            if (is_array($root)) {
                if (!array_key_exists($segment, $root)) {
                    $root[$segment] = array();
                }
                $root = &$root[$segment];
                continue;
            } else {
                throw new Exception('Invalid Key Name: Already Set as Value');
            }
        }
        $root[$var] = $value;
        self::_Save();
    }

    /**
     * @param object $filename
     */
    public static function _Load(string $filename)
    {
        self::$_DATA = null;
        $tmp = file_get_contents($filename);
        self::$_DATA = _Yaml::parse($tmp, _Yaml::PARSE_EXCEPTION_ON_INVALID_TYPE & _Yaml::PARSE_DATETIME);
    }

    public static function _Save()
    {
        $tmp = _Yaml::dump(self::$_DATA);
        file_put_contents('config.yml', $tmp);
    }
}

Config::_Load('config.yml');
