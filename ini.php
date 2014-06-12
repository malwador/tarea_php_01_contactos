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
    if (isset($_POST['nombres'], $_POST['apellidos'], $_POST['email'], $_POST['telefono_p'], $_POST['telefono_a'], $_POST['genero'],$_POST['departamento'])){

        $nombres =      escape($_POST['nombres']);
        $apellidos =    escape($_POST['apellidos']);
        $email =        escape($_POST['email']);
        $telefono_p =   escape($_POST['telefono_p']);
        $telefono_a =   escape($_POST['telefono_a']);
        $genero =       escape($_POST['genero']);
        $departamento = escape($_POST['departamento']);


        if (!empty($nombres) && !empty($apellidos) && !empty($genero) && !empty($departamento)){

            Capsule::table('personas')->insert(
                array('nombres' =>  $nombres,
                    'apellidos' =>  $apellidos,
                    'email' =>      $email,
                    'telefono_p' => $telefono_p,
                    'telefono_a' => $telefono_a,
                    'genero' => $genero,
                    'departamento' => $departamento)
            );

        }
    }
}

    if (isset($_POST['action'])){
        $action = $_POST['action'];
    }



// insertamos encabezado
require 'includes/header.php';


$lista_personas = Capsule::table('personas')->get();

//var_dump($lista_personas);

?>
<div class="row">
<h1>Tarea PHP 01 - Gestión de contactos</h1>

<?php

    switch($action){

        case ($action="ver"):
            echo "estamos usando ver";
        break;

        case "editar":
        break;

        case "listar":
        break;

        case "borrar":
        break;

        case "agregar";
        break;

        default:
        break;
    }

    if(!count($lista_personas)){
        echo "No hay contactos";
} else {

?>
        <h3>Contactos Existentes: <?php echo count($lista_personas); ?></h3>

    <div class="row">
        <div class="large-1 columns" style="color: white; background: #008cba; line-height: 2"><strong>Id</strong></div>
        <div class="large-3 columns" style="color: white; background: #008cba; line-height: 2"><strong>Nombres</strong></div>
        <div class="large-3 columns" style="color: white; background: #008cba; line-height: 2"><strong>Apellidos</strong></div>
        <div class="large-5 columns" style="color: white; background: #008cba; line-height: 2"><strong>Opciones</strong></div>
</div>
        <?php
            foreach($lista_personas as $p){

            ?>
            <div class="row">
                <div class="large-1 columns"><a href="ini.php?action=ver&id=<?php echo $p['id'] ?>"><?php echo $p['id'] ?></a></div>
                <div class="large-3 columns"><a href="ini.php?action=ver&id=<?php echo $p['id'] ?>"><?php echo $p['nombres'] ?></div>
                <div class="large-3 columns"><a href="ini.php?action=ver&id=<?php echo $p['id'] ?>"><?php echo $p['apellidos'] ?></div>
                <div class="large-5 columns"><a href="#"> <i class="fa fa-user"></i> &nbsp;Ver</a> <a href="/?action=ver"><span style="color: green"><i class="fa fa-pencil-square-o"></i></span> &nbsp;Editar</a> <a href="#"><span style="color: red"><i class="fa fa-eraser"></i></span> &nbsp;Borrar</a></div>
<!--                <div class="large-2 columns">--><?php //echo $p['genero'] ?><!--</div>-->
<!--                <div class="large-2 columns">--><?php //echo $p['departamento'] ?><!--</div>-->
<!--                <div class="large-2 columns">--><?php //echo $p['comentarios'] ?><!--</div>-->
<!--                <div class="large-2 columns">--><?php //echo $p['fecha_creacion'] ?><!--</div>-->
            </div>
        <?php

                }
        ?>
        <div class="row">
            <div class="large-4 columns">&nbsp;</div>
            <div class="large-4 columns">
                <ul class="pagination">
                  <li class="arrow unavailable"><a href="">&laquo;</a></li>
                  <li class="current"><a href="">1</a></li>
                  <li><a href="">2</a></li>
                  <li><a href="">3</a></li>
                  <li><a href="">4</a></li>
                  <li class="unavailable"><a href="">&hellip;</a></li>
                  <li><a href="">12</a></li>
                  <li><a href="">13</a></li>
                  <li class="arrow"><a href="">&raquo;</a></li>
                </ul>
            </div>
            <div class="large-4 columns">&nbsp;</div>
        </div>
        <?php
        }
        ?>
<hr>
<h3>Agregar contactos <i class="fa fa-user"></i></h3>
<form action="ini.php" method="post">

    <div class="row collapse">
        <div class="small-2 large-1 columns">
            <span class="prefix">Nombres&nbsp;&nbsp;</span>

        </div>
        <div class="small-8 large-6 columns">
            <input type="text" placeholder="Escriba sólo sus nombres" name="nombres" id="nombres" />
        </div>
        <div class="small-2 large-5 columns"><small class="error"><i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;Oops!!! se te olvidó poner tu nombre!</small></div>
    </div>



    <div class="row collapse">
        <div class="small-2 large-1 columns">
            <span class="prefix">Apellidos</span>
        </div>
        <div class="small-10 large-6 columns">
            <input type="text" placeholder="Escriba sus apellidos" name="apellidos" id="apellidos" />
        </div>
        <div class="small-2 large-5 columns"><small class="error"><i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;Oops!!! se te olvidó poner tus apellidos!</small></div>    </div>

    <div class="row collapse">
        <div class="small-2 large-1 columns">
            <span class="prefix">Email</span>
        </div>
        <div class="small-10 large-6 columns">
            <input type="text" placeholder="Escriba su dirección de correo electrónico" name="email" id="email"/>
        </div>
        <div class="small-2 large-5 columns"><small class="error"><i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;Hmmm, eso no parece ser un email válido.</small></div>

    </div>

    <div class="row collapse">
        <div class="small-2 large-1 columns">
            <span class="prefix">Teléfono principal</span>
        </div>
        <div class="small-2 large-2 columns">
            <input type="text" placeholder="Teléfono fijo o celular" name="telefono_p" id="telefono_p" />
        </div>

        <div class="small-2 large-1 columns">&nbsp;</div>

        <div class="small-2 large-1 columns">
            <span class="prefix">Teléfono alterno</span>
        </div>
        <div class="small-2 large-2 columns">
            <input type="text" placeholder="Teléfono alterno" name="telefono_a" id="telefono_a"/>
        </div>

        <div class="large-5 columns">&nbsp;</div>
    </div>

    <div class="row">
        <div class="large-3 columns">
            <label>Genero
                <select name="genero" id="genero">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
            </label>
        </div>
        <div class="large-1 columns">&nbsp;</div>
        <div class="large-3 columns">
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
        <div class="large-5 columns">&nbsp;</div>
    </div>

    <div class="row">
        <div class="large-8 columns">
            <input class="button small large-3" type="submit" value="Agregar">
        </div>
        <div class="large-4 columns">&nbsp;</div>
    </div>
</form>
<?php
require_once 'includes/footer.php';