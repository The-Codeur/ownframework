<?php



define('DS', DIRECTORY_SEPARATOR);
define('WEBSITE_NAME', 'ownframework');
define('URL', $_SERVER['REQUEST_SCHEME'].':'.DS.DS.$_SERVER['REQUEST_HOST'].dirname(dirname($_SERVER['SCRIPT_NAME'])));
define('ROOT', dirname(__DIR__).DS);
define('APP', 'app'. DS);
define('MODELS', 'Models'. DS);
define('VIEWS', 'Views'.DS);
define('CONTROLLERS', 'Controllers'.DS);
define('DATABASE', 'database'.DS);
define('SOURCE', 'Source'.DS);
define('CORE', 'Core'.DS);
define('HELPERS', 'Helpers'.DS);
define('USEFULS', 'Usefuls'.DS);
define('ROUTES', 'Routes'.DS);
define('STORAGE', 'storage'.DS);
define('TEMPLATE', 'template'.DS);
define('LAYOUTS', 'layouts'.DS);
define('EMAILS', 'emails'.DS);
define('BASE', 'public'.DS);
define('ASSETS', 'assets'.DS);
define('CSS', 'css'.DS);
define('JS', 'js'.DS);
define('MEDIA', 'media'.DS);
define('VENDOR', 'vendor'.DS);


require_once ROOT.VENDOR.'autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
echo env('DB_HOST');


