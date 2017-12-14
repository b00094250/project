<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php';
$app = new Itb\WebApplication();
$app->run();




use Itb\MainController;

define('DB_HOST','localhost:3306');
define('DB_USER', 'sam');
define('DB_PASS', 'ade');
define('DB_NAME', 'itb');







