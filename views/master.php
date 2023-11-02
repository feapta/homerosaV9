
<html lang="es">


<head>
    <meta charset="utf-8">
    <title>HomeRosa</title>
    <meta name="description" content="sistema gestion agraria" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="/build/img/logoSM.svg">
    <meta name="apple-mobile-web-app-title" content="">

    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="/build/img/logoSM.svg">
    <!-- Fuentes -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
    
    <!-- Estilos -->
    <link rel="stylesheet" href="/build/css/app.css">
</head>

<body>
    <header>
        <div class="contenedor">
            <h5 id="hora">Hora</h5>
            <h3>Home Rosa</h3>
            <h5 id="fecha">Fecha</h5>
        </div>
    </header>
    
    <main class="contenidoMaster">
        <?php echo $contenido; ?>
    </main>

    <footer>
        <?php $fecha = date('Y'); ?>
        <p class="copyright">Todos los derechos reservados, Sistemar - <?php echo $fecha ?> &copy;</p>
    </footer>

    <script src="/build/js/modernizr.js"></script>
    <?php echo $script ?? ''; ?>

</body>
</html>