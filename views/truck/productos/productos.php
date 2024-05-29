<h1>Productos</h1>



 <!-- Listado cartas -->

 <div class="contenedor productos_clientes">

    <div class="contenedor_botones">
        <a href="/truck" class="boton_verde">Inicio</a>
        <a href="/categorias" class="boton_verde">Productos</a>
        <a href="/novedades" class="boton_verde">Novedades</a>
        <a href="/pruebas" class="boton_verde">Pruebas</a>
    </div>
  
    <div class="titulo">
        <h3><?php echo $categorias->categoria; ?> </h3>
    </div>

    <?php include_once __DIR__ . '/../../templates/alertas.php'; ?>
    
        <ul class="tabla">
            <?php foreach($productos as $producto) { ?>
                
                <li class="seleccion">
                    <h4><?php echo $producto->titulo; ?></h4>

                    <div class="imagen_productos">
                        <img class="imagen1" src="/imagenes_productos/<?php echo $producto->imagen1; ?>" alt="Img">
                        <img class="imagen2" src="/imagenes_productos/<?php echo $producto->imagen2; ?>" alt="Img">
                        <img class="imagen3" src="/imagenes_productos/<?php echo $producto->imagen3; ?>" alt="Img">
                        <video class="video" src="/videos_productos/<?php echo $producto->video; ?>"></video>
                    </div>

                    <div class="texto">
                        <p><?php echo $producto->descripcion; ?></p>
                        <h5>Precio</h5>
                        <h5><?php echo $producto->precio_venta; ?> €</h5>

                    </div>

                </li>
            <?php } ?>
        </ul>

</div>



