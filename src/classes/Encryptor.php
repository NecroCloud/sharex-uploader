<?php
//
// Copyright (c) TsukiDev All rights reserved.
// Licensed under the MIT License. See LICENSE file in the project root for full license information.
//

class Encryptor
{
    // Encryption Info
    private $ciphering = "AES-128-CTR";
    private $options = 0;
    private $encryption_iv = '6437739475938240';
    private $encryption_key = "dsfuihdfsuhiosdf78s864r435fjkfd";

    public function __construct(){}

    public function crypt($string){
        return openssl_encrypt($string, $this->ciphering, $this->encryption_key, $this->options, $this->encryption_iv);
    }

    public function decrypt($string){
        return openssl_decrypt($string, $this->ciphering, $this->encryption_key, $this->options, $this->encryption_iv);
    }
}