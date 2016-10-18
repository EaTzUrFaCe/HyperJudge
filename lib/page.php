<?php
class Page {
    static $_SOURCE, $_HEAD = array(), $_HEADERS = array(), $_REQUIRE = array('JS' => array(), 'CSS' => array()), $_TWIGVARS = array(), $_TITLE;
    public static function Render($html = false) {
        $twig = new Twig_Environment(new Twig_Loader_Filesystem('ui'), array('cache' => 'ui/cache', 'debug' => Config::Get("Environment.Debug")));
        $tpl = $twig->loadTemplate(self::$_SOURCE . '.twig');
        foreach (self::$_HEADERS as $header) {
            header($header);
        }
	self::$_TWIGVARS['title'] = self::$_TITLE;
        if ($html) {$tpl->display(self::$_TWIGVARS);
	} else {
	$tpl->display(array());
}
    }
    public static function Header($header) {
        self::$_HEADERS[] = $header;
    }
    public static function Require ($file, $type) {
        switch ($type) {
            case 'js':
                $_REQUIRE['JS'][] = $file;
            case 'css':
                $_REQUIRE['CSS'][] = $file;
            break;
            default:
                Logging::Log("Invalid File Type at `Template::Require('$file', '$type');`", Severity::WARNING);
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
        self::SetVar('title', $value);
    }
    public static function SetSourceFile($file) {
        self::$_SOURCE = $file;
	Logging::Debug("Set Template Source to: $file.twig");
    }
}
