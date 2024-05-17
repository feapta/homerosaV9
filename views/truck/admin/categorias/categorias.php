
<!-- Pagina principal de categorias -->


<div class="contenedor contenedor_tablas">
    <h3>Administracion de categorías</h3>

    <div class="contenedor_botones">
        <a href="/admin/categorias/crear" class="boton_verde ">Crear categoría</a>
    </div>
    
        <ul class="tabla">
            <?php foreach($categoria as $cate) { ?>
                <p><?php echo $categoria->id; ?></p>
                <p><?php echo $categoria->categoria; ?></p>
                <img src="/imagenes_categorias/<?php echo $categoria->imagen; ?>" alt="Imagenes">
            <?php } ?>
        </ul>
</div>


<!-- <?php  //$script = '<script src="/build/js/datatable/categorias.js"></script>'; ?> -->