<!doctype html>

<html>
<head>


    <!--    Seccion de los meta tag-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <title><?php echo $tile_web . ' - ' . $title_hw; ?></title>


    <!--    Seccion de los stylesheets-->
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/foundation.css">


    <!--    Seccion de los scripts-->
    <script src="/js/vendor/modernizr.js"></script>
    <script src="/js/vendor/jquery.js"></script>

</head>
<body class="antialiased hide-extras probando">
    <div class="row marketing">
        <nav class="top-bar" data-topbar>
            <ul class="title-area">
                <li class="name">
                    <h1><a href="#"><?php echo $title_hw;?></a></h1>
                </li>
                <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>

            <section class="top-bar-section">
                <!-- Right Nav Section -->
                <ul class="right">
                    <li class="active"><a href="#">Inicio</a></li>
                    <li><a href="#">Listado</a></li>
                    <li><a href="#">Agregar contactos</a></li>
                </ul>

            </section>
        </nav>