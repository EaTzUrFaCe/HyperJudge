<?php
/**
 * ./lib/logging.php.
 *
 * @author Matt Hermes <msh160130@utdallas.edu>
 */
class Logging
{
    /**
     * @param unknown $Message
     * @param unknown $Severity
     * @param object  $e        (optional)
     */
    public static function log($Message, $Severity, Exception $e = null)
    {
        echo '['.Severity::Name($Severity)."]: $Message";
    }

    /**
     * @param unknown $message
     */
    public static function Debug($message)
    {
        if (Config::Get('Environment.Debug')) {
            echo '[DEBUG]: '.$message;
        }
    }
}

class Severity
{
    const FATAL = 0, ERROR = 1, WARNING = 2, NOTICE = 3, DEBUG = 4;

    /**
     * @param unknown $Severity
     *
     * @return unknown
     */
    public static function Name($Severity)
    {
        $class = new ReflectionClass(__CLASS__);
        $constants = array_flip($class->getConstants());

        return $constants[$Severity];
    }
}

set_error_handler(create_function('$severity, $message, $file, $line', 'throw new ErrorException($message, $severity, $severity, $file, $line);'));
