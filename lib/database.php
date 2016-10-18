<?php
/**
 * ./lib/database.php.
 *
 * @author Matt Hermes <msh160130@utdallas.edu>
 */
use \ORM as _DB;

class DB
{
    /**
     * @param unknown $id
     */
    public static function FindUserByID($id)
    {
    }
}

try {
    _DB::configure(array('connection_string' => ''.Config::Get('Database.Host').''.Config::Get('Database.Name'), 'username' => Config::Get('Database.Username'), 'password' => Config::Get('Database.Password'), 'return_result_sets' => true));
} catch (Exception $e) {
    Logging::log('Error connecting to database!', Severity::FATAL, $e);
}
