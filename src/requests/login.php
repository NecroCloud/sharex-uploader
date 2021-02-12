<?php
require $_SERVER["DOCUMENT_ROOT"] . '/vendor/autoload.php';
$config = include $_SERVER["DOCUMENT_ROOT"] . '/config.php';
$encryptor = new Encryptor();

    $password = hash('sha256', $encryptor->crypt($_POST['password']));

    if (isset($config['allowedUsers'][$_POST['name']])) {
        if ($config['allowedUsers'][$_POST['name']] === $password) {
            setcookie('name', $_POST['name'], time() + (86400 * 30), "/");
            setcookie('password', $password, time() + (86400 * 30), "/");
            echo 1;
            die();
        }
        echo 3;
    }
echo 2;
die();