
<!-- Opciones del opcion -->

<input type="hidden" name="opcion[idproducto]" value="<?php echo s($autonumero); ?>">

<!-- Titulo -->
    <div class="campo">
        <label for="titulo">Título</label>
        <select name="opcion[titulo]" id="titulo">
            <option value="Opcion 1">Opcion 1</option>
            <option value="Opcion 2">Opcion 2</option>
            <option value="Opcion 3">Opcion 3</option>
            <option value="Opcion 4">Opcion 4</option>
            <option value="Opcion 5">Opcion 5</option>
            <option value="Opcion 6">Opcion 6</option>
            <option value="Opcion 7">Opcion 7</option>
            <option value="Opcion 8">Opcion 8</option>
            <option value="Opcion 9">Opcion 9</option>
            <option value="Opcion 10">Opcion 10</option>
        </select>
        <!--<input type="text" id="titulo" name="opcion[titulo]" placeholder="Título" value="<?php echo s($opciones->titulo); ?>">-->
    </div>

<!-- Descripcion -->
    <div class="campo">
        <label for="descripcion">Descripción</label>
        <textarea name="opcion[descripcion]" class="descripcion" rows="5"><?php echo s($opciones->descripcion); ?></textarea>
    </div>

<!-- Precio de compra -->
    <div class="campo">
        <label for="precio_compra">Precio com.</label>
        <input type="number" step="0.01" id="precio_compra" name="opcion[precio_compra]" placeholder="0,00" value="<?php echo s($opciones->precio_compra); ?>">
    </div>

<!-- Envio -->
    <div class="campo">
        <label for="envio">Envio</label>
        <input type="number" step="0.01" id="envio" class="precios" name="opcion[envio]" placeholder="0,00" value="<?php echo s($opciones->envio); ?>">
    </div>

<!-- Precio de venta -->
    <div class="campo">
        <label for="precio_venta">Precio ven.</label>
        <input type="number" step="0.01" id="precio_venta" class="precios" name="opcion[precio_venta]" placeholder="0,00" value="<?php echo s($opciones->precio_venta); ?>">
    </div>

<!-- Imagen1 -->
    <div class="campo">
        <input type="file" name="opcion[imagen1]" placeholder="Img" accept="image/jpeg, image/png">
    </div>
    <div class="contenedor_imagen">
        <?php  if($opciones->imagen1) { ?>
            <img src="/imagenes_productos/<?php echo $opciones->imagen1 ?>" class="imagen">
        <?php } ?>
    </div>

<!-- Imagen2 -->
    <div class="campo">
        <input type="file" id="imagen2" name="opcion[imagen2]" placeholder="Img" accept="image/jpeg, image/png">
    </div>
    <div class="contenedor_imagen">
        <?php  if($opciones->imagen2) { ?>
            <img src="/imagenes_productos/<?php echo $opciones->imagen2 ?>" class="imagen">
        <?php } ?>
    </div>

<!-- Imagen3 -->
    <div class="campo">
        <input type="file" id="imagen3" name="opcion[imagen3]" placeholder="Img" accept="image/jpeg, image/png">
    </div>
    <div class="contenedor_imagen">
        <?php  if($opciones->imagen3) { ?>
            <img src="/imagenes_productos/<?php echo $opciones->imagen3 ?>" class="imagen">
        <?php } ?>
    </div>

<!-- Boton -->
    <div class="contenedor_botones">
        <input type="submit" class="boton_verde" value="Guardar opcion">
    </div>

