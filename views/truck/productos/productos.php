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
        <h3> Categoria <?php echo $categorias->categoria; ?> </h3>
    </div>

    <?php include_once __DIR__ . '/../../templates/alertas.php'; ?>
    
        <ul class="tabla">
            <?php foreach($productos as $producto) { ?>
                
                <li class="seleccion">

                    <div class="imagen_productos">
                        <img src="/imagenes_productos/<?php echo $producto->imagen1; ?>" alt="Img">
                        <img src="/imagenes_productos/<?php echo $producto->imagen2; ?>" alt="Img">
                        <img src="/imagenes_productos/<?php echo $producto->imagen3; ?>" alt="Img">
                    </div>

                    <div class="texto">
                        <h4>    <?php echo $producto->titulo; ?></h4>
                        <p>     <?php echo $producto->descripcion; ?></p>
                        <h5>Precio</h5>
                        <h5><?php echo $producto->precio_venta; ?> €</h5>

                    </div>

                </li>
            <?php } ?>
        </ul>

</div>



