<?php
require_once("../vendor/autoload.php");

use zion\core\System;
use app\mod\web\model\Route;

ini_set('display_errors',0);
error_reporting(E_ALL);

System::configure();

\zion\core\App::route();

\library\FrontEnd;

Route::getInstance($_SERVER);
