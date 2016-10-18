<?php
class Auth {
    public static function Login($username, $password) {
        $user = DB::GetUserByUsername($username);
    }
    public static function Logout($hash) {
        Session::Set("User", null);
    }
    public static function ValidateSession() {
        $sid = Session::Get("SessionID");
    }
    static function _MakeHash($password) {
        return password_hash($password, PASSWORD_BCRYPT, ['cost' => Config::Get("Auth.Encryption.Cost") ]);
    }
    static function _VerifyHash($password, $hash) {
        return password_verify($password, $hash);
    }
}
