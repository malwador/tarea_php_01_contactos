<?php
/**
 * User: salvador
 * Date: 6/6/14
 * Time: 4:12 PM
 */

// llamamos configuraciones generales
require 'includes/config.php';

// lamando scripts externos
require_once 'vendor/autoload.php';

// llamando clases para validacion
require 'classes/ManejadorErrores.php';
require 'classes/Validador.php';

// insertamos encabezado
require 'includes/header.php';

?>

<h1>Enviar Email usando PHPMailer</h1>

<form action="ini.php" method="get">
    <div class="row">
        <div class="large-12 columns">
            <label>Nombre Completo
                <input type="text" placeholder="Escriba su nombre completo" />