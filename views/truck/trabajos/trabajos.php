
<!-- Listado trabajos realizados -->

<div class="contenedor productos_clientes">
    <div class="contenedor_botones">
        <a href="/truck" class="boton_azul">Inicio</a>
        <a href="/categorias" class="boton_azul">Productos</a>
        <a href="/novedades" class="boton_azul">Novedades</a>
        <a href="/pruebas" class="boton_azul">Pruebas</a>
    </div>
  
    <div class="titulo">
        <h1 class="nombre_pagina">Trabajos realizados</h1>
    </div>

    <?php include_once __DIR__ . '/../../templates/alertas.php'; ?>
    
        <ul class="tabla">
            <?php foreach($trabajos as $trabajo) { ?>
                
                <li class="seleccion sombraCaja">
                    <h4><?php echo $trabajo->titulo; ?></h4>

                    <p><?php echo $trabajo->descripcion; ?></p>

                    <div class="imagen_productos">
                        <?php if ( $trabajo->imagen1) { ?>
                            <img class="imagen1 imas" src="/imagenes_trabajos/<?php echo $trabajo->imagen1; ?>" alt="Img">
                        <?php } ?>
                        <?php if ( $trabajo->imagen2) { ?>
                            <img class="imagen2 imas" src="/imagenes_trabajos/<?php echo $trabajo->imagen2; ?>" alt="Img">
                        <?php } ?>
                        <?php if ( $trabajo->imagen3) { ?>
                            <img class="imagen3 imas" src="/imagenes_trabajos/<?php echo $trabajo->imagen3; ?>" alt="Img">
                        <?php } ?>
                        <?php if ( $trabajo->video ) { ?>
                            <img class="imagen4 imas" src="/build/img/truck/video.png" alt="Img">
                            <p class="urlvideo" hidden src="/videos_trabajos/<?php echo $trabajo->video; ?>" value="<?php echo $trabajo->video; ?>"></p>
                        <?php } ?>
                    </div>

                    <div class="texto">
                        <p><?php echo $trabajo->fecha_entrada; ?></p>
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
                        <source src="/videos_trabajos/"  type="video/mp4">
                        Su navegador no soporta HTML5 video.
                    </video>
                </div>
            </div>
        </div>
                    
</div>



