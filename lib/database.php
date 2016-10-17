<?php
use \ORM as _DB;
class DB {
    public static function FindUserByID($id) {
    }
}
try {
    _DB::configure(array("connection_string" => "" . Config::Get("Database.Host") . "" . Config::Get("Database.Name"), "username" => Config::Get("Database.Username"), "password" => Config::Get("Database.Password"), "return_result_sets" => true));
}
catch(Exception $e) {
    Logging::Log("Error connecting to database!", Severity::FATAL, $e);
}
