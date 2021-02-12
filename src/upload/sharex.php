<?php
require 'vendor/autoload.php';
$config = new Config('config.php');
$functions = new Functions();

if (empty($_FILES) && empty($_POST) && isset($_SERVER['REQUEST_METHOD']) && strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
    echo 'Upload error: your file is larger than the post_max_size set in your php.ini.';
    die();
} else if ($_FILES['fileupload']['error'] === 1) {
    echo 'Upload error: your file is larger than the upload_max_filesize set in your php.ini.';
    die();
}

if (isset($_POST['key'])) {
     if ($_POST['key'] === $config->read('secretKey')) {

         switch ($config->read('fileNameScheme')){
             case 'keep':
                 $fileName = pathinfo($_FILES['fileupload']['name'], PATHINFO_FILENAME);
                 break;
             case 'random':
                 $fileName = $functions->generateRandomString();
                 break;
             case 'date':
                 $fileName = date("m.d.y:H:m:s");
                 break;
         }

     }
}
