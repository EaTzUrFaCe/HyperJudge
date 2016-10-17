<?php
class Logging {
    public function Log(string $Message, int $Severity, Exception $e = null) {
    }
}
class Severity {
    public $FATAL = 0, $ERROR = 1, $WARNING = 2, $NOTICE = 3, $DEBUG = 4;
}
set_error_handler(create_function('$severity, $message, $file, $line', 'throw new ErrorException($message, $severity, $severity, $file, $line);'));
