


<div class="contenedor productos_clientes">

    <div class="contenedor_botones">
        <a href="/truck" class="boton_verde">Inicio</a>
        <a href="/categorias" class="boton_verde">Productos</a>
        <a href="/novedades" class="boton_verde">Novedades</a>
        <a href="/pruebas" class="boton_verde">Pruebas</a>
    </div>

    <h1>Categoria de productos</h1>

    <ul class="tabla">
            <?php foreach($categorias as $cate) { ?>
                <li class="seleccion">
                    <a href="/productos?id=<?php echo $cate->id; ?>" >
                        <h4> <?php echo $cate->categoria; ?> </h4>
                        <img src="/imagenes_categorias/<?php echo $cate->imagen; ?>" alt="Img">
                    </a>
                </li>
            <?php } ?>
        </ul>
</div>