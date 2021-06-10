<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Container\Container;

$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => env('DB_DRIVER', 'mysql'),
    'host'      => env('DB_LOCALHOST', '127.0.0.1'),
    'port'  => env('DB_PORT', 3306),
    'database'  => env('DB_DATABASE'),
    'username'  => env('DB_USERNAME'),
    'password'  => env('DB_PASSWORD'),
    'charset'   => env('DB_CHARSET', 'utf8'),
    'collation' => env('DB_COLLATION', 'utf8_unicode_ci'),
    'prefix'    => env('DB_PREFIX', '')
]);

$capsule->setEventDispatcher(new Dispatcher(new Container));
$capsule->setAsGlobal();

$capsule->bootEloquent();



