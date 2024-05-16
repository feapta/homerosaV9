
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

    <header class="contenedor header">
        <div class="contenido_header">
            <div class="barra">
                <a class="logo" href="/truck">
                    <img src="/build/img/logotruck.png" alt="">
                </a>

                <div class="mobile_menu">
                    <img class="nav_movil" src="/build/img/barras.svg" alt="Icono navegacion resposive">
                </div>

                <nav class="navegacion">
                    <a href="/truck">Inicio</a>
                    <a href="/novedades">Novedades</a>
                    <a href="/productos">Productos</a>
                    <a href="/pruebas">Pruebas</a>

                    <img class="dark_mode_boton" src="/build/img/dark-mode.svg" alt="">
                </nav>
            </div>
        </div>
    </header>


    <div class="content">
        <main class="contenedor_truck">
            <?php echo $contenido_truck; ?>
        </main>
    </div>

    <footer>
        <?php $fecha = date('Y'); ?>
        <p class="copyright">Todos los derechos reservados, Sistemar - <?php echo $fecha ?> &copy;</p>
    </footer>

    
    <script src="/build/js/modernizr.js"></script>
    <script src="/build/js/jquery-3-7-1.js"></script>
        
    <?php echo $script ?? ''; ?>

</body>
</html>