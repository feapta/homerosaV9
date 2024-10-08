<?php

if(!isset($_SESSION)){
    session_start();
}

$admin = $_SESSION['admin'] ?? false;
$nombreSolo = $_SESSION['nombreSolo'] ?? '';

?>

<html lang="es">


<head>
    <meta charset="utf-8">
    <title>TruckHomeRosa</title>
    <meta name="description" content="Truck, cosas de para camiones" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="">

    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
 
    <!-- Estilos -->
    <link rel="stylesheet" href="/build/css/app.css">
</head>

<body>

    <header class="header">
        <div class="barra contenedor">
            <a class="logo" href="/truck">
                <img src="/build/img/truck/logotruck.png" alt="">
            </a>

            <div class="mobile_menu">
                <img class="nav_movil" src="/build/img/truck/barras.svg" alt="Icono navegacion resposive">
            </div>

            <nav class="navegacion">
                <a href="/truck">Inicio</a>
                <a href="/novedades">Novedades</a>
                <a href="/categorias">Productos</a>
                <a href="/pruebas">Pruebas</a>
                <a href="/trabajos">Trabajos</a>
                <?php if($admin === '1'): ?>
                        <a href="/domo"><?php echo $nombreSolo?></a>
                    <?php endif?>
                <img class="dark_mode_boton" src="/build/img/dark-mode.svg" alt="">
            </nav>
        </div>
    </header>


    <div class="content">
        <main class="contenedor_master_truck">
            <?php echo $contenido_truck; ?>
        </main>
    </div>

    <footer>
        <?php $fecha = date('Y'); ?>
        <p class="copyright">Todos los derechos reservados, Sistemar - <?php echo $fecha ?> &copy;</p>
    </footer>

    <script src="/build/js/librerias/jquery-3-7-1.js"></script>
    <script src="/build/js/librerias/modernizr.js"></script>
    <script src="/build/js/librerias/idioma.js"></script>
    <script src="/build/js/librerias/datatable2.0.7.js"></script>
    <script src="/build/js/librerias/sweetalert2.js"></script>
    <script src="/build/js/eliminar.js"></script>
    <script src="/build/js/navegaResponsive.js"></script>
    <script src="/build/js/imagenAgrandar.js"></script>
    

        
    <?php echo $script ?? ''; ?>

</body>
</html>