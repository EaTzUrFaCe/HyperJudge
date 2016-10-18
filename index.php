<?php
/**
 * ./index.php.
 *
 * @author Matt Hermes <msh160130@utdallas.edu>
 */
require_once 'vendor/autoload.php';
require_once 'lib/auth.php';
require_once 'lib/config.php';
require_once 'lib/database.php';
require_once 'lib/logging.php';
require_once 'lib/page.php';
require_once 'lib/session.php';
require_once 'lib/vars.php';
$path = Vars::Get('uri', '', true);
if ((($file = realpath($path)) !== false) && (strpos($path, '.php') === false)) {
    header('Content-type: '.mime_content_type($file));
    echo file_get_contents($file);
} elseif (($file = realpath($path.'.php')) !== false) {
    require_once $file;
} else {
    $path = 'public/scoreboard';
    require_once $path.'.php';
}
Page::SetSourceFile($path);
Page::Render();
