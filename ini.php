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
<form action="ini.php?a=add" method="get">
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
// insertamos pie de pagina
require 'includes/footer.php';
// bayardo
// salvador