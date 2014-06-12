<!doctype html>

<html>
<head>


    <!--    Seccion de los meta tag-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <title><?php echo $title_web . ' - ' . $title_hw; ?></title>


    <!--    Seccion de los stylesheets-->
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/foundation.css">
    <link href="/vendor/fortawesome/font-awesome/css/font-awesome.css" rel="stylesheet">


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
                    <li class="active"><a href="/"><i class="fa fa-home fa-fw"></i>&nbsp;Inicio</a></li>
                    <li><a href="ini.php?action=listar"><i class="fa fa-users fa-fw"></i>&nbsp;Listado</a></li>
                    <li><a href="ini.php?action=agregar"><i class="fa fa-user fa-fw"></i>&nbsp;Agregar contactos</a></li>
                </ul>

            </section>
        </nav>
        </div>