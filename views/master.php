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
    <title>HomeRosa</title>
    <meta name="description" content="HomeRosa" />
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

    <div class="content">
        <header> 
            <div class="contenedor">
                <h5 id="hora"></h5>
                <h3>Home Rosa</h3>
                <?php if($admin === '1'): ?>
                    <a href="/domo"><?php echo $nombreSolo?></a>
                <?php endif?>
                <h5 id="fecha"></h5>
            </div>
        </header>
        
        <main class="contenedor domo">
            <?php echo $contenido; ?>
        </main>

        <footer>
            <?php $fecha = date('Y'); ?>
            <p class="copyright">Todos los derechos reservados, Sistemar - <?php echo $fecha ?> &copy;</p>
        </footer>
    </div>



    <script src="/build/js/librerias/modernizr.js"></script>
    <script src="/build/js/librerias/mqtt.js"></script>
    <script src="/build/js/librerias/jquery-3-7-1.js"></script>
    <script src="/build/js/librerias/chart-4.4.1.js"></script>

        
    <?php echo $script ?? ''; ?>

</body>
</html>