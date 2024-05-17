
<!-- Pagina principal de categorias -->


<div class="contenedor categorias">
    <h3>Administracion de categorías</h3>

    <div class="contenedor_botones">
        <a href="/admin/categorias/crear" class="boton_verde ">Crear categoría</a>
    </div>
    
        <ul class="tabla">
            <?php foreach($categorias as $cate) { ?>
                <li>
                    <p><?php echo $cate->idcatepro; ?></p>
                </li>
                <li>
                    <p><?php echo $cate->categoria; ?></p>
                </li>
                <li>
                    <img src="/imagenes_categorias/<?php echo $cate->imagen; ?>" alt="Imagen">
                </li>
            <?php } ?>
        </ul>
</div>


<!-- <?php  //$script = '<script src="/build/js/datatable/categorias.js"></script>'; ?> -->