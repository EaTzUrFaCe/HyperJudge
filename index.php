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
require_once 'lib/lang.php';
require_once 'lib/logging.php';
require_once 'lib/page.php';
require_once 'lib/session.php';
require_once 'lib/vars.php';
$path = Vars::Get('uri', 'public/scoreboard', true);
if ((($file = realpath($path)) !== false) && (strpos($path, '.php') === false)) {
    header('Content-type: '.mime_content_type($file));
    echo file_get_contents($file);
} elseif (($file = realpath($path.'.php')) !== false) {
    require_once $file;
}
Page::SetTitle(Lang::Get(str_replace('/', '.', $path).'.title'));
Page::SetSourceFile(str_replace('/', '_', $path));
Page::Render();
