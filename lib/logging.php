<?php
class Logging {
    public static function Log($Message, $Severity, Exception $e = null) {
        echo ("[" . Severity::Name($Severity) . "]: $Message");
    }

    public static function Debug($message) {
        if (Config::Get("Environment.Debug")) { echo ("[DEBUG]: " . $message); }
    }
}
class Severity {
    const FATAL = 0, ERROR = 1, WARNING = 2, NOTICE = 3, DEBUG = 4;
    public static function Name($Severity) {
        $class = new ReflectionClass(__CLASS__);
        $constants = array_flip($class->getConstants());
        return $constants[$Severity];
    }
}
set_error_handler(create_function('$severity, $message, $file, $line', 'throw new ErrorException($message, $severity, $severity, $file, $line);'));
