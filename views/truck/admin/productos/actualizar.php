
<!-- Pagina actualizar productos -->

<div class="contenedor contenido_centrado actualizar_productos">
    <h3>Actualizar producto</h3>

    <!-- Boton -->
    <div class="contenedor_botones">
        <a class="boton_azul" href="/productos/admin">Volver</a>
    </div>

    <?php include_once __DIR__ . "/../../../templates/alertas.php" ?>
    
    <form class="formulario" method="POST"  enctype="multipart/form-data">
        <?php include __DIR__ . '/formulario.php'; ?>
    </form>
</div>


<?php $script = '<script src="/build/js/actualizaOpciones.js"></script>'; ?>
<?php $script .= '<script src="/build/js/actualizar.js"></script>'; ?>
<?php $script .= '<script src="/build/js/escuchas.js"></script>'; ?>