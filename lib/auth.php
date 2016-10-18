<?php
/**
 * ./lib/auth.php.
 *
 * @author Matt Hermes <msh160130@utdallas.edu>
 */
class Auth
{
    /**
     * @param unknown $username
     * @param unknown $password
     */
    public static function Login($username, $password)
    {
        $user = DB::GetUserByUsername($username);
    }

    /**
     * @param unknown $hash
     */
    public static function Logout($hash)
    {
        Session::Set('User', null);
    }

    public static function ValidateSession()
    {
        $sid = Session::Get('SessionID');
    }

    /**
     * @param unknown $password
     *
     * @return unknown
     */
    public static function _MakeHash($password)
    {
        return password_hash($password, PASSWORD_BCRYPT, ['cost' => Config::Get('Auth.Encryption.Cost')]);
    }

    /**
     * @param unknown $password
     * @param unknown $hash
     *
     * @return unknown
     */
    public static function _VerifyHash($password, $hash)
    {
        return password_verify($password, $hash);
    }
}
