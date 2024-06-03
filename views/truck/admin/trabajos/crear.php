
<!-- Pagina crea nuevo producto -->

<div class="contenedor contenido_centrado crear_trabajo">
    <h3>Crear nuevo trabajo</h3>

    <?php include_once __DIR__ . "/../../../templates/alertas.php" ?>

    <form class="formulario" method="POST" enctype="multipart/form-data">
        <?php include __DIR__ . '/formulario.php'; ?>
    </form>
</div>