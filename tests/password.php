<?php
//
// Copyright (c) TsukiDev All rights reserved.
// Licensed under the MIT License. See LICENSE file in the project root for full license information.
//

require '../vendor/autoload.php';

$encryptor = new Encryptor();

$string = "test";

echo hash('sha256', $encryptor->crypt($string));