<?php


class Auth
{

    function __construct(){
    }

    public function checkStatus(){
        global $encryptor, $config;

        if (isset($_COOKIE['user']) && isset($_COOKIE['password'])){
            if (isset($config->read('allowedUsers')[$_COOKIE['user']])){
                if ($config->read('allowedUsers')[$_COOKIE['user']] == $_COOKIE['password']){
                    return true;
                }
            }
        }

        return false;
    }

}