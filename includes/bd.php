<?php
/**
 * User: salvador
 * Date: 5/27/14
 * Time: 3:47 PM
 * Aqui vamos a listar la información de la base de datos
 */

//error_reporting(0);

// datos generales de conexion
$server_bd = "localhost";
$user_bd = "sal_php";
$pass_bd = "123456";
$schema_db = "tareas_php";



// vamos a intentar conectarnos
$connect_db = new mysqli($server_bd,$user_bd,$pass_bd,$schema_db);

//echo $connect_db->connect_errno;

    if (mysqli_connect_errno()) {
        die ('Mierda! Algo salio mal con la base de datos: ' . mysqli_connect_error() );
        exit();
    }
