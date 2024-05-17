
<!-- Pagina principal de categorias -->


<div class="contenedor contenedor_tablas">
    <h3>Administracion de categorías</h3>

    <div class="contenedor_botones">
        <a href="/admin/categorias/crear" class="boton_verde ">Crear categoría</a>
    </div>
    
        <ul class="tabla">
            <?php foreach($categoria as $cate) { ?>
                <li class="seleccion">
                    <a href="/cartas/listado?id=<?php echo $cate->id; ?>" >
                        <h4> <?php echo $cate->categoria; ?> </h4>
                        <img src="/imagenes_categorias/<?php echo $cate->imagen; ?>" alt="Imagenes">
                    </a>
                </li>
            <?php } ?>
        </ul>
</div>


<?php  $script = '<script src="/build/js/datatable/categorias.js"></script>'; ?>