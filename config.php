<?php

return  [
    // ** General Configuration **
    // BaseURL Enter your Domain with the correct path
    // SecretKey Enter your secret key. This key allows Users to post with ShareX
    "siteName" => "TsukiDev Uploader",
    "baseURL" => "https://example.com",
    "secretKey" => "secret",

    // ** Authentication **
    // If disabled no User accounts will be required.
    // If activated be sure to limit the IP addresses that can access the site!
    "userAccounts" => true,

    // Enter the Username and the password.
    // Enter the encrypted Version of your Password.
    // Password encryptor: https://YOURDOMAIN.com/encryptor
    "allowedUsers" => [
        "admin" => "caeb5626be35fd8d92429a7651b7af8d6c1accb7711772bb30916773aabe3c95"
    ],

    // Enter the IP Addresses that are allowed to access the Site
    // Leave Blank if you want to allow all IPS to access the site
    "allowedIPs" => [
        "::1"
    ],

    // ** Uploader settings **
    // How do you want the files to be named after uploader? #
    // Options:

    // keep (Keep the original File name)
    // random (generate a random new name)
    // date (Set the date as the name)
    "fileNameScheme" => "random",
];
