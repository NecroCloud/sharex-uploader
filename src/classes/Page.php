<?php


class Page
{
    public $title;
    public $url;

    function __construct($title, $url){
        global $config;

        $this->title = $title;
        $this->url = $url;

        // Check if IP must be verified
        if (is_array($config->read('allowedIPs')) && count($config->read('allowedIPs')) > 0){
            $this->authIP();
        }
        // Check if USER must be verified
        if (is_array($config->read('allowedUsers')) && count($config->read('allowedUsers')) > 0){
            $auth = new Auth();

            if (!$auth->checkStatus()){
                $this->buildLogin();
            }
        }
    }

    private function authIP(){
        global $config, $smarty;

        $userIP = $_SERVER['REMOTE_ADDR'];

        if (!in_array($userIP, $config->read('allowedIPs'))){
            $smarty->assign('userIP', $userIP);
            $smarty->display('error/ipVerify.tpl');
            die();
        }
    }

    private function buildLogin(){
        global $smarty;

        $smarty->display('login.tpl');
        die();
    }

}