<?php
/**
 * Created by PhpStorm.
 * User: salvador
 * Date: 4/25/14
 * Time: 4:36 PM
 */

error_reporting(E_ALL);

// llamamos configuraciones generales
require 'includes/config.php';

// lamando scripts externos
require_once 'vendor/autoload.php';

// llamando base de datos & seguridad
require_once 'includes/bd.php';

use Illuminate\Database\Capsule\Manager as Capsule;

require_once 'includes/security_bd.php';

if (!empty($_POST))
{
    if (isset($_POST['nombres'], $_POST['apellidos'],$_POST['genero'],$_POST['departamento'])){

        $nombres =      escape($_POST['nombres']);
        $apellidos =    escape($_POST['apellidos']);
        $genero =       escape($_POST['genero']);
        $departamento = escape($_POST['departamento']);

        if (!empty($nombres) && !empty($apellidos) && !empty($genero) && !empty($departamento)){

            Capsule::table('personas')->insert(
                array('nombres' => $nombres,
                    'apellidos' => $apellidos,
                    'genero' => $genero,
                    'departamento' => $departamento)
            );

        }
    }
}
// insertamos encabezado
require 'includes/header.php';


$lista_personas = Capsule::table('personas')->get();

//var_dump($lista_personas);

?>

<h1>Tarea PHP 01 - Gestión de contactos</h1>

<?php
    if(!count($lista_personas)){
        echo "No hay contactos";
} else {

?>
<div class="row">
    <h3>Contactos Existentes: <?php echo count($lista_personas); ?></h3>
    <div class="large-2 columns">Nombres</div>
    <div class="large-2 columns">Apellidos</div>
    <div class="large-2 columns">Genero</div>
    <div class="large-2 columns">Departamento</div>
    <div class="large-2 columns">Comentarios</div>
    <div class="large-2 columns">Fecha creacion</div>
</div>
        <?php
            foreach($lista_personas as $p){

            ?>
            <div class="row">
                <div class="large-2 columns"><?php echo $p['nombres'] ?></div>
                <div class="large-2 columns"><?php echo $p['apellidos'] ?></div>
                <div class="large-2 columns"><?php echo $p['genero'] ?></div>
                <div class="large-2 columns"><?php echo $p['departamento'] ?></div>
                <div class="large-2 columns"><?php echo $p['comentarios'] ?></div>
                <div class="large-2 columns"><?php echo $p['fecha_creacion'] ?></div>
            </div>
        <?php

                }
        }
        ?>
<hr>
<h3>Agregar contactos <i class="fa fa-user"></i></h3>
<form action="ini.php" method="post">

    <div class="row collapse">
        <div class="small-3 large-2 columns">
            <span class="prefix">Nombres</span>
        </div>
        <div class="small-9 large-10 columns">
            <input type="text" placeholder="Escriba sólo sus nombres" name="nombres" id="nombres"/>
        </div>
    </div>

    <div class="row collapse">
        <div class="small-3 large-2 columns">
            <span class="prefix">Apellidos</span>
        </div>
        <div class="small-9 large-10 columns">
            <input type="text" placeholder="Escriba sus apellidos" name="apellidos" id="apellidos"/>
        </div>
        <div class="large-4 columns">
            <label>Genero
                <select name="genero" id="genero">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
            </label>
        </div>
        <div class="large-4 columns">&nbsp;</div>
        <div class="large-4 columns">
        <label>Departamento
                <select name="departamento" id="departamento">
                    <option value="Managua">Managua</option>
                    <option value="Masaya">Masaya</option>
                    <option value="Granada">Granada</option>
                    <option value="Rivas">Rivas</option>
                    <option value="Leon">Leon</option>
                    <option value="Chinandega">Chinandega</option>
                    <option value="Boaco">Boaco</option>
                    <option value="Chontales">Chontales</option>
                    <option value="Rio San Juan">Rio San Juan</option>
                    <option value="Jinotega">Jinotega</option>
                    <option value="Nueva Segovia">Nueva Segovia</option>
                    <option value="Matagalpa">Matagalpa</option>
                    <option value="RAAN">RAAN</option>
                    <option value="RAAS">RAAS</option>
                </select>
            </label>
        </div>
            <input class="button small large-3" type="submit" value="Agregar">
        </div>
    </div>
</form>
<?php
require_once 'includes/footer.php';