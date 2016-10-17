<?php
class Template {
    static $_SOURCE, $_HEAD = array(), $_HEADERS = array(), $_REQUIRE = array('JS' => array(), 'CSS' => array()), $_TWIGVARS = array(), $_TITLE;
    public static function Render() {
    }
    public static function Header($header) {
        self::$_DATA[] = $header;
    }
    public static function Require ($file, $type) {
        switch ($type) {
            case 'js':
                $_REQUIRE['JS'][] = $file;
            case 'css':
                $_REQUIRE['CSS'][] = $file;
            break;
            default:
                Logging::Log("Invalid File Type at `Template::Require('$file', '$type'`", Severity::WARNING);
            break;
        }
    }
    public static function AppendHead($file) {
        self::$_HEAD[] = $file;
    }
    public static function SetVar($name, $value) {
        self::$_TWIGVARS[$name] = $value;
    }
    public static function SetTitle($value) {
        self::$_TITLE = $value;
    }
    public static function SetSourceFile($file) {
        self::$_SOURCE = $file;
    }
}
