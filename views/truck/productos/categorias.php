


<div class="contenedor productos_clientes">

    <div class="contenedor_botones">
        <a href="/truck" class="boton_verde">Inicio</a>
        <a href="/novedades" class="boton_verde">Novedades</a>
        <a href="/pruebas" class="boton_verde">Pruebas</a>
        <a href="/trabajos" class="boton_verde">Trabajos</a>
    </div>

    <h1 class="nombre_pagina">Categorias</h1>

    <ul class="tabla">
            <?php foreach($categorias as $cate) { ?>
                <li class="seleccion sombraCaja">
                    <a href="/productos?id=<?php echo $cate->id; ?>" >
                        <h4> <?php echo $cate->categoria; ?> </h4>
                        <div class="cajaImagen">
                            <img src="/imagenes_categorias/<?php echo $cate->imagen; ?>" alt="Img">
                        </div>
                    </a>
                </li>
            <?php } ?>
        </ul>
</div>