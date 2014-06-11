<?php
/**
 * User: salvador
 * Date: 5/27/14
 * Time: 3:47 PM
 * Aqui vamos a listar la información de la base de datos
 */

//error_reporting(0);

// datos generales de conexion
require_once 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'tareas_php',
    'username'  => 'sal_php',
    'password'  => '123456',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);
$capsule->setAsGlobal();


