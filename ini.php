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

//// llamando clases para validacion
//require 'classes/ManejadorErrores.php';
//require 'classes/Validador.php';
//
//
//
//$manejandorErrores = new ManejadorErrores;

if (!empty($_POST))
{
    if (isset($_POST['nombres'], $_POST['apellidos'],$_POST['genero'],$_POST['departamento'])){

        $nombres =      trim($_POST['nombres']);
        $apellidos =    trim($_POST['apellidos']);
        $genero =       trim($_POST['genero']);
        $departamento = trim($_POST['departamento']);

        if (!empty($nombres) && !empty($apellidos) && !empty($genero) && !empty($departamento)){

            $insertar = $connect_db->prepare("INSERT INTO personas (nombres, apellidos, genero, departamento, fecha_creacion) VALUES (?, ?, ?, ?, NOW())");

            var_dump($connect_db->connect_error);
            var_dump($insertar);

            $insertar->bind_param("ssss", $nombres, $apellidos, $genero, $departamento);

            if($insertar->execute()){
                header('Location: ini.php');
                die();
            }
        }
    }


//    $validador = new Validador($manejandorErrores);
//
//    $validacion = $validator->check($_POST, [
//
//    ]);
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

//if(isset($_GET['nombres'])){
//    $nombres = trim($_GET['nombres']);
//
//    $people = $conectar_bd->prepare("SELECT nombres, apellidos FROM personas WHERE nombres = ?");
//    $people->bind_param('s',$nombres);
//    $people->execute();
//
//    print_r($people);
//}

$lista_personas = array();

if($resultado = $connect_db->query("SELECT * FROM personas")){
    if($resultado->num_rows){
        while($row = $resultado->fetch_object()){
            $lista_personas[] = $row;
        }
    $resultado->free();
    }
}
echo '<pre>', print_r($lista_personas), '</pre>';

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
                <div class="large-2 columns"><?php echo escape($p->nombres) ?></div>
                <div class="large-2 columns"><?php echo escape($p->apellidos) ?></div>
                <div class="large-2 columns"><?php echo escape($p->genero) ?></div>
                <div class="large-2 columns"><?php echo escape($p->departamento) ?></div>
                <div class="large-2 columns"><?php echo escape($p->comentarios) ?></div>
                <div class="large-2 columns"><?php echo escape($p->fecha_creacion) ?></div>
            </div>
        <?php

                }
        }
        ?>
<hr>
<h3>Agregar contactos</h3>
<form action="ini.php" method="post">
    <div class="row">
        <div class="large-12 columns">
            <label>Nombres
                <input type="text" placeholder="Escriba sólo sus nombres" name="nombres" id="nombres"/>
            </label>
            <label>Apellidos
                <input type="text" placeholder="Escriba sus apellidos" name="apellidos" id="apellidos"/>
            </label>
            <label>Genero
                <select name="genero" id="genero">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
            </label>
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