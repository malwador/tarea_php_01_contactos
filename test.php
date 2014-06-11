<?php
/**
 * Created by PhpStorm.
 * User: salvador
 * Date: 6/11/14
 * Time: 1:09 PM
 */

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

//use Illuminate\Events\Dispatcher;
//use Illuminate\Container\Container;
//$capsule->setEventDispatcher(new Dispatcher(new Container));
$capsule->setAsGlobal();
//$capsule->bootEloquent();


$results = Capsule::select('select * from personas');

if (!$results){
    echo 'La cagamos hay un error<BR>';
    die();
    }
foreach($results as $r){
    print_r($r);
}

if (!empty($_POST))
{
if (isset($_POST['nombres'], $_POST['apellidos'],$_POST['genero'],$_POST['departamento'])){

    $nombres =      trim($_POST['nombres']);
    $apellidos =    trim($_POST['apellidos']);
    $genero =       trim($_POST['genero']);
    $departamento = trim($_POST['departamento']);

    Capsule::table('personas')->insert(
        array('nombres' => $nombres,
               'apellidos' => $apellidos,
                'genero' => $genero,
                'departamento' => $departamento)
    );
}
}
//var_dump($nombres);
//var_dump($apellidos);
//var_dump($genero);
//var_dump($departamento);

?>
<html>
<form method="post" action="test.php">
    <label name="nombres">Nombres</label>
    <input name="nombres">
    <BR>
    <label name="apellidos">Apellidos</label>
    <input name="apellidos">
    <BR>
    <label name="genero">Genero</label>
    <input name="genero">
    <BR>
    <label name="departamento">Departamento</label>
    <input name="departamento">
    <input type="submit" value="Agregar">
</form>
</html>