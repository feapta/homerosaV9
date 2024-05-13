
<html lang="es">


<head>
    <meta charset="utf-8">
    <title>TruckHomeRosa</title>
    <meta name="description" content="Truck" />
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
            <h3>cosas de TRUCK</h3>
        </header>
        
        <main class="contenedor domo">
            <?php echo $contenido_truck; ?>
        </main>

        <footer>
            <?php $fecha = date('Y'); ?>
            <p class="copyright">Todos los derechos reservados, Sistemar - <?php echo $fecha ?> &copy;</p>
        </footer>
    </div>



    <script src="/build/js/modernizr.js"></script>
    <script src="/build/js/jquery-3-7-1.js"></script>
        
    <?php echo $script ?? ''; ?>

</body>
</html>