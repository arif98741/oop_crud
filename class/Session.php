<?php

class Session {

    /*
    ||==========================================
    ||  Session Initialization
    ||==========================================
    */
    public static function initialization() {
        if (version_compare(phpversion(), '5.4.0', '<')) {
            if (session_id() == '') {
                session_start();
            } else {
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
            }
        }
    }

    /*
    ||==========================================
    ||  Set Session
    || @param $key,$value
    || return object
    ||==========================================
    */
    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    /*
    ||==========================================
    ||  Get Session Value
    || @param $key,
    || return response
    ||==========================================
    */
    public static function get($key) {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return false;
        }
    }

    /*
    ||==========================================
    ||  Check User Login
    ||==========================================
    */
    public static function checkLogin() {
        $login = self::get(['login']);
        if ($login) {
            header("Location: index.php");
        }
    }

}
