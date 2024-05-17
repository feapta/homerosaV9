
<!-- Pagina principal de categorias -->


<div class="contenedor contenedor_tablas">
    <h3>Administracion de categorías</h3>

    <div class="contenedor_botones">
        <a href="/admin/categorias/crear" class="boton_verde ">Crear categoría</a>
    </div>
    
        <ul class="tabla">
            <?php foreach($categorias as $cate) { ?>
                <p><?php echo $cate->id; ?></p>
                <p><?php echo $cate->categoria; ?></p>
                <img src="/imagenes_categorias/<?php echo $cate->imagen; ?>" alt="Imagenes">
            <?php } ?>
        </ul>
</div>


<!-- <?php  //$script = '<script src="/build/js/datatable/categorias.js"></script>'; ?> -->