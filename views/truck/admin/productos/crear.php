
<!-- Pagina crea nuevo producto -->


<div class="contenedor crear_producto">
    <h3>Crear nuevo producto</h3>
    
    <!-- Boton -->
    <div class="contenedor_botones">
        <a class="boton_azul" href="/productos/admin">Volver</a>
    </div>
        <?php include_once __DIR__ . "/../../../templates/alertas.php" ?>

    <form class="formulario" method="POST" action="/productos/admin/crear" enctype="multipart/form-data">
        <?php include __DIR__ . '/formulario.php'; ?>
    </form>
</div>


<?php $script = '<script src="/build/js/crearOpciones.js"></script>'; ?>
<?php $script .= '<script src="/build/js/opciones.js"></script>'; ?>
<?php $script .= '<script src="/build/js/escuchas.js"></script>'; ?>
 