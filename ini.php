<?php
/**
 * Created by PhpStorm.
 * User: salvador
 * Date: 4/25/14
 * Time: 4:36 PM
 */

// llamamos configuraciones generales
require 'includes/config.php';

// lamando scripts externos
require_once 'vendor/autoload.php';

// llamando base de datos & seguridad
require_once 'includes/bd.php';
require_once 'includes/security_bd.php';

// llamando clases para validacion
require 'classes/ManejadorErrores.php';
require 'classes/Validador.php';



$manejandorErrores = new ManejadorErrores;

if (!empty($_POST))
{

    $validador = new Validador($manejandorErrores);

    $validacion = $validator->check($_POST, [

    ]);
}

// insertamos encabezado
require 'includes/header.php';

//if($resultado = $connect_db->query("select * from personas") or die($connect_db->error)) {
//
//    if($count = $resultado->num_rows) {
//
//        echo '<p>' . $count . '</p>';
//
////        $rows = $resultado->fetch_all(MYSQL_ASSOC);
//
//        while ($row = $resultado->fetch_object()){
//            echo $row->nombres . ' ' . $row->apellidos . ' de ' . $row->departamento . '<BR>    ';
//
//
//
//        }
//    }
//$resultado->free();
//}



//print_r($resultado);

if(isset($_GET['nombres'])){
    $nombres = trim($_GET['nombres']);

    $people = $conectar_bd->prepare("SELECT nombres, apellidos FROM personas WHERE nombres = ?");
    $people->bind_param('s',$nombres);
    $people->execute();

    print_r($people);
}


?>

<h1>Tarea PHP 01 - Gestión de contactos</h1>



<form action="ini.php" method="post">
    <div class="row">
        <div class="large-12 columns">
            <label>Nombres
                <input type="text" placeholder="Escriba sólo sus nombres" />
            </label>
            <label>Apellidos
                <input type="text" placeholder="Escriba sus apellidos" />
            </label>
            <label>Genero
                <select>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
            </label>
            <label>Departamento
                <select>
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
            <input class="button small large-12" type="submit" value="Agregar">
        </div>
    </div>

<?php

//if($insert = $connect_db->query("
//        INSERT INTO personas (nombres, apellidos, genero, departamento, comentarios, fecha_creacion)
//        VALUES ({$_GET['nombres']},$_GET[apellidos],$_GET[genero],$_GET[departamento],$_GET[comentarios],NOW())
//")){
//    echo $connect_db->affected_rows;
//
//}
// insertamos pie de pagina
    die();
require_once 'includes/footer.php';