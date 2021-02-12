<?php


class Functions
{

    function __construct(){}

    // Get the newest Version of ShareX
    public function getShareXVersion(){
        $opts = [
            'http' => [
                'method' => 'GET',
                'header' => [
                    'User-Agent: PHP'
                ]
            ]
        ];

        $context = stream_context_create($opts);
        $content = json_decode(file_get_contents('https://api.github.com/repos/ShareX/ShareX/releases/latest', false, $context));
        return str_replace('v', '', $content->tag_name);
    }

    // Get the newest Version of the Uploader
    public function getUploaderVersion(){
        $opts = [
            'http' => [
                'method' => 'GET',
                'header' => [
                    'User-Agent: PHP'
                ]
            ]
        ];

        $context = stream_context_create($opts);
        $content = json_decode(file_get_contents('https://api.github.com/repos/ShareX/ShareX/releases/latest', false, $context));
        return str_replace('v', '', $content->tag_name);
    }

    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}