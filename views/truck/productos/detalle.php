
<div class="contenedor">

    <div class="contenedor_botones">
        <a href="/truck" class="boton_azul">Inicio</a>
        <a href="/categorias" class="boton_azul">Productos</a>
    </div>
        
    <div class="productoSeleccionado">
        <div class="producto">
            <h3 class="tituloProducto"><?php echo $productos->titulo?></h3>
            <hr>
            <div class="contenido">
                <?php if ($productos->video){ ?>
                    <video class="video modalVideo" src="/videos_productos/<?php echo $productos->video?>"></video>
                <?php } else { ?>
                    <video hidden></video>
                <?php } ?>
                <div class="datosProducto">
                    <span>Descripción</span>
                    <p class="descripcionProducto"><?php echo $productos->descripcion?></p>
                    <span>Cantidad</span>
                    <p><?php echo $productos->unidades?></p>
                </div>
            </div>

        </div>

        <div class="opciones">
            <?php foreach($opciones as $opcio) { ?>
                
                <div class="opcion sombraCaja">
                    <h4><?php echo $opcio->opcion?></h4>
                    <hr>
                    
                    <div class="datos">
                        <span>Tamaño </span>
                        <p><?php echo $opcio->medidas?></p>
                        <span>Precio </span>
                        <p><?php echo $opcio->precio_venta?></p>
                    </div>
                    
                    <div class="imag">
                        <img class=".imas modalImg" src="/imagenes_productos/<?php echo $opcio->imagen1?>" alt="">
                        <img class=".imas modalImg" src="/imagenes_productos/<?php echo $opcio->imagen2?>" alt="">
                        <img class=".imas modalImg" src="/imagenes_productos/<?php echo $opcio->imagen3?>" alt="">
                    </div>

                </div>

            <?php } ?>
        </div>

    </div>
</div>
    