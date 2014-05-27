<?php
/**
 * Created by PhpStorm.
 * User: salvador
 * Date: 4/25/14
 * Time: 4:36 PM
 */

// llamamos configuraciones generales
require 'includes/config.php';

// insertamos encabezado
require 'includes/header.php';

echo '<p><h1>Tarea PHP 01 - Gestión de contactos</h1></p>';

?>
<form>
    <div class="row">
        <div class="large-12 columns">
            <label>Nombres
                <input type="text" placeholder="Escriba sólo sus nombres" />
            </label>
            <label>
                <input type="text" placeholder="Escriba sus apellidos" />
            </label>
        </div>
    </div>


<?php
// insertamos pie de pagina
require 'includes/footer.php';

