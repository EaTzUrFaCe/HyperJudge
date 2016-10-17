<?php
require_once ("vendor/autoload.php");

require_once ("lib/auth.php");
require_once ("lib/config.php");
require_once ("lib/database.php");
require_once ("lib/logging.php");
require_once ("lib/session.php");
require_once ("lib/vars.php");
$path = Vars::Get("uri", "", true);
if ((($file = realpath($path)) !== false) && (strpos($path, ".php") === false)) {
    header("Content-type: " . mime_content_type($file));
    echo (file_get_contents($file));
} elseif (($file = realpath($path . ".php")) !== false) {
    require_once ($file);
} else {
    echo ("File not found.");
}
echo ("Current Path: " . $path);
echo ("<br>");
echo ("Last Path: " . Session::Get('path', 'unknown', true));
echo ("<br>");
Session::Set('path', $path);
