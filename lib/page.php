<?php
/**
 * ./lib/page.php.
 *
 * @author Matt Hermes <msh160130@utdallas.edu>
 */
class Page
{
    public static $_SOURCE, $_HEAD = array(), $_HEADERS = array(), $_REQUIRE = array('JS' => array(), 'CSS' => array()), $_TWIGVARS = array(), $_TITLE;

    /**
     * @param unknown $html (optional)
     * @param unknown $data (optional)
     */
    public static function Render($html = false, $data = array())
    {
        $twig = new Twig_Environment(new Twig_Loader_Filesystem('ui'), array('cache' => 'ui/cache', 'debug' => Config::Get('Environment.Debug')));
        $tpl = $twig->loadTemplate(self::$_SOURCE.'.twig');
        foreach (self::$_HEADERS as $header) {
            header($header);
        }
        self::$_TWIGVARS['title'] = self::$_TITLE;

        $tpl->display($html ? self::$_TWIGVARS : $data);
    }

    /**
     * @param unknown $header
     */
    public static function header($header)
    {
        self::$_HEADERS[] = $header;
    }

    public static function require($file, $type)
    {
        switch ($type) {
        case 'js':
            $_REQUIRE['JS'][] = $file;
        case 'css':
            $_REQUIRE['CSS'][] = $file;
            break;
        default:
            Logging::log("Invalid File Type at `Template::Require('$file', '$type');`", Severity::WARNING);
            break;
        }
    }

    /**
     * @param unknown $file
     */
    public static function AppendHead($file)
    {
        self::$_HEAD[] = $file;
    }

    /**
     * @param unknown $name
     * @param unknown $value
     */
    public static function SetVar($name, $value)
    {
        self::$_TWIGVARS[$name] = $value;
    }

    /**
     * @param unknown $value
     */
    public static function SetTitle($value)
    {
        self::SetVar('title', $value);
    }

    /**
     * @param unknown $file
     */
    public static function SetSourceFile($file)
    {
        self::$_SOURCE = $file;
        Logging::Debug("Set Template Source to: $file.twig");
    }
}
