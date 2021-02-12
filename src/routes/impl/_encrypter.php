<?php
//
// Copyright (c) TsukiDev All rights reserved.
// Licensed under the MIT License. See LICENSE file in the project root for full license information.
//

require 'vendor/autoload.php';
use Steampixel\Route;

Route::add('/encryptor', function () {
    global $smarty;

    include $_SERVER["DOCUMENT_ROOT"] . '/src/templates/password.php';
    die();
});

Route::pathNotFound(function ($path) {

    echo "Not Found";

});