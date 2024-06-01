
<!-- Listado productos por categoria -->

<div class="contenedor productos_clientes">
    <div class="contenedor_botones">
        <a href="/truck" class="boton_azul">Inicio</a>
        <a href="/categorias" class="boton_azul">Productos</a>
        <a href="/novedades" class="boton_azul">Novedades</a>
        <a href="/pruebas" class="boton_azul">Pruebas</a>
    </div>
  
    <div class="titulo">
        <h1 class="nombre_pagina"><?php echo $categorias->categoria; ?> </h1>
    </div>

    <?php include_once __DIR__ . '/../../templates/alertas.php'; ?>
    
        <ul class="tabla">
            <?php foreach($productos as $producto) { ?>
                
                <li class="seleccion sombraCaja">
                    <h4><?php echo $producto->titulo; ?></h4>

                    <div class="imagen_productos">
                        <?php if ( $producto->imagen1) { ?>
                            <img class="imagen1 imas" src="/imagenes_productos/<?php echo $producto->imagen1; ?>" alt="Img">
                        <?php } ?>
                        <?php if ( $producto->imagen2) { ?>
                            <img class="imagen2 imas" src="/imagenes_productos/<?php echo $producto->imagen2; ?>" alt="Img">
                        <?php } ?>
                        <?php if ( $producto->imagen3) { ?>
                            <img class="imagen3 imas" src="/imagenes_productos/<?php echo $producto->imagen3; ?>" alt="Img">
                        <?php } ?>
                        <?php if ( $producto->video ) { ?>
                            <img class="imagen4 imas" src="/build/img/truck/video.png" alt="Img">
                            <p class="urlvideo" hidden src="/videos_productos/<?php echo $producto->video; ?>" value="<?php echo $producto->video; ?>"></p>
                        <?php } ?>
                    </div>

                    <div class="texto">

                        <p><?php echo $producto->descripcion; ?></p>
                        <h5>Precio</h5>
                        <h5><?php echo $producto->precio_venta; ?> €</h5>

                    </div>

                </li>
            <?php } ?>
        </ul>

        
        <!-- Modal del video -->
        <div class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>                       
                </div>
                <div class="modal-body">    
                    <video class="video" autoplay width="100%" controls>
                        <source src="/videos_productos/"  type="video/mp4">
                        Su navegador no soporta HTML5 video.
                    </video>
                </div>
            </div>
        </div>
                    
</div>



