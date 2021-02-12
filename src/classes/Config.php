<?php
//
// Copyright (c) TsukiDev All rights reserved.
// Licensed under the MIT License. See LICENSE file in the project root for full license information.
//

class Config
{
    private static $configData = array();

    public function __construct($configLink) {
        if (!file_exists($configLink)) {
            die("Missing Config!");
        }

        if(self::$configData === array()) {
            self::$configData = require $_SERVER["DOCUMENT_ROOT"] . "/" . $configLink;
        }
    }

    public function read($key){
        if (isset(self::$configData[$key])){
            return self::$configData[$key];
        }

        return $this->getDefault($key);
    }

    private function getDefault($key){
        $defaultConfig = [
            "test" => "Test2"
        ];

        if (isset($defaultConfig[$key])){
            return $defaultConfig[$key];
        }
        return false;
    }
}