<?php
//
// Copyright (c) TsukiDev All rights reserved.
// Licensed under the MIT License. See LICENSE file in the project root for full license information.
//

require 'vendor/autoload.php';
use Steampixel\Route;

Route::add('/', function () {
    global $config;

    $page = new Page('Start', '/');

    echo $config->read('name');
});

Route::add('/sharex', function (){
    global $config, $functions;

    $shareX_Config = [
        'Name' => $config->read('siteName'),
        'Version' => $functions->getShareXVersion(),
        'DestinationType' => 'ImageUploader, FileUploader, TextUploader',
        'RequestMethod' => 'POST',
        'RequestURL' => $config->read('baseURL') . '/src/upload/sharex.php',
        'Body' => 'MultipartFormData',
        'FileFormName' => 'fileupload',
        'Arguments' => [
            'key' => $config->read('secretKey'),
            'name' => '%h.%mi.%s-%d.%mo.%yy'
        ]
    ];

    header("Content-Disposition: attachment; filename=UPLOADERNAME.sxcu");
    header('Content-Type: application/json');
    echo json_encode($shareX_Config);
});

Route::pathNotFound(function ($path) {
    $page = new Page('Start', '/');
});