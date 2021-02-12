<?php
/** @noinspection ALL */

require 'vendor/autoload.php';
use Steampixel\Route;

/*
 * Cycle thru the differnt Route Files
 */
function initRoutes(){
    $dir = new DirectoryIterator(dirname('src/routes/impl/_main.php'));
    foreach ($dir as $fileinfo) {
        if (!$fileinfo->isDot()) {
            require 'src/routes/impl/' . $fileinfo->getFilename();
        }
    }
    Route::run('/');
}