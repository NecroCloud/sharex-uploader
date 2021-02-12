<?php
//
// Copyright (c) TsukiDev All rights reserved.
// Licensed under the MIT License. See LICENSE file in the project root for full license information.
//

// Set Error Reporting
//error_reporting(0);

// Requires
require 'vendor/autoload.php';
require 'src/routes/route_manager.php';

// Init Classes
$config = new Config('config.php');
$functions = new Functions();

// Init Smarty System
$smarty = new Smarty;
$smarty->setTemplateDir('src/templates');
$smarty->setCacheDir('cache');
$smarty->setCompileDir('cache');
$smarty->assign('config', $config);

// Start the routing system
initRoutes();