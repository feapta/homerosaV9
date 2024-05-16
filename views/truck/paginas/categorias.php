

<!-- Categorias de la carta -->

<div class="contenedor contenido_centrado cartas">

    <div class="contenedor_botones">
        <a href="/" class="boton_light-green-400 volver" type="submit">Inicio</a>
    </div>
    
    <h3>Carta</h3>
    <p>¿Que desea tomar hoy?</p>
    
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
    
    <div class="contenedor_botones">
        <a href="" class="boton_light-green-400" type="submit">Volver</a>
    </div>
</div>
