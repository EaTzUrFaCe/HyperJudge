<?php
/**
 * ./lib/page.php.
 *
 * Functions for Rendering the Page
 *
 * @author Matt Hermes <msh160130@utdallas.edu>
 */
class Page
{
    public static $_SOURCE, $_HEAD = array(), $_HEADERS = array(), $_REQUIRE = array('JS' => array(), 'CSS' => array()), $_TWIGVARS = array(), $_TITLE;

    /**
     * Outputs the Page.
     *
     * @param unknown $html (optional) True if the Output Format is HTML
     * @param unknown $data (optional) Data if not Outputting HTML
     */
    public static function Render($html = true, $data = array())
    {
        $twig = new Twig_Environment(new Twig_Loader_Filesystem('ui'), array('cache' => 'ui/cache', 'debug' => Config::Get('Environment.Debug')));
        $tpl = $twig->loadTemplate(self::$_SOURCE.'.twig');
        foreach (self::$_HEADERS as $header) {
            header($header);
        }
        self::$_TWIGVARS['title'] = self::$_TITLE;

	if ($html) {
		echo '<html><head>';
		foreach (self::$_REQUIRE['JS'] as $js) {
			printf('<script type="text/javascript" src="/static/js/%s.js"></script>', $js);
		}
		foreach (self::$_REQUIRE['CSS'] as $css) {
			printf('<link rel="stylesheet" href="/static/css/%s.css" />', $css);
		}
		echo '</head><body>';
	        $tpl->display(self::$_TWIGVARS);
		echo '</body></html>';
	} else {
		$tpl->display($data);
	}
    }

    /**
     * Sets a Response Header to be Sent with the Page.
     *
     * @param string $header The Header to be Sent
     */
    public static function Header($header)
    {
        self::$_HEADERS[] = $header;
    }

    /**
     * Includes Either a JavaScript or CSS File in the Page's Output.
     *
     * @param string $file The File Name, Starting in '/static/{css,js}/'
     * @param string $type The File Type, Either 'css' or 'cs'
     */
    public static function Require($file, $type)
    {
        switch ($type) {
        case 'js':
            self::$_REQUIRE['JS'][] = $file;
	    break;
        case 'css':
            self::$_REQUIRE['CSS'][] = $file;
            break;
        default:
            Logging::log("Invalid File Type at `Template::Require('$file', '$type');`", Severity::WARNING);
            break;
        }
    }

    /**
     * Adds a Line to be Output in the Head Block of the Page.
     *
     * @param string $line The Line to be Output
     */
    public static function AppendHead($line)
    {
        self::$_HEAD[] = $file;
    }

    /**
     * Sets a Variable to Pass to the Template Engine.
     *
     * @param string $name  The Variable's Name
     * @param mixed  $value The Variable's Value
     */
    public static function SetVar($name, $value)
    {
        self::$_TWIGVARS[$name] = $value;
    }

    /**
     * Sets the Page Title.
     *
     * @param string $value The Page's Title
     */
    public static function SetTitle($value)
    {
        self::SetVar('title', $value);
    }

    /**
     * Sets the Template File for the Page to Render.
     *
     * @param string $file The Path to the Template File, Starting in '/ui/'
     */
    public static function SetSourceFile($file)
    {
        self::$_SOURCE = $file;
    }
}

Page::Require('bootstrap.min', 'js');
Page::Require('bootstrap.min', 'css');
Page::Require('bootstrap-theme.min', 'css');
