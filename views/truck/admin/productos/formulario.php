


<!-- Categorias -->
    <div class="campo">
        <label for="familia">Familia</label>
            <select name="producto[idcate]"  id="familia">
                    <!-- crear -->
                <?php if(!$productos->id) { ?>
                    <option value="">-- Seleccione --</option>
                <?php } else { ?>
                    <!-- Actualizar -->
                    <option value="<?php echo s($productos->idcate); ?>"> <?php echo $productos->idcate; ?> </option>
                <?php } ?>

                <?php foreach($categorias as $cate) { ?>
                    <option value="<?php echo s($cate->id); ?>"> <?php echo $cate->categoria; ?></option>
                <?php } ?>
            </select>
    </div>

<!-- Titulo -->
    <div class="campo">
        <label for="titulo">Título</label>
        <input type="text" id="titulo" name="producto[titulo]" placeholder="Título" value="<?php echo s($productos->titulo); ?>">
    </div>

<!-- Unidades -->
    <div class="campo">
        <label for="unidades">Uds.</label>
        <input type="text" id="unidades" name="producto[unidades]" placeholder="Uds." value="<?php echo s($productos->unidades); ?>">
    </div>

<!-- Descripcion -->
    <div class="campo">
        <label for="descripcion">Descripción</label>
        <textarea name="producto[descripcion]" id="descripcion"><?php echo s($productos->descripcion); ?></textarea>
    </div>

<!-- Precio de compra -->
    <div class="campo">
        <label for="precio_compra">Precio compra</label>
        <input type="number" step="0.01" id="precio_compra" name="producto[precio_compra]" placeholder="0,00" value="<?php echo s($productos->precio_compra); ?>">
    </div>

<!-- Envio -->
    <div class="campo">
        <label for="envio">Envio</label>
        <input type="number" step="0.01" id="envio" class="precios" name="producto[envio]" placeholder="0,00" min="0" value="<?php echo s($productos->envio); ?>">
    </div>

<!-- Precio de venta -->
    <div class="campo">
        <label for="precio_venta">Precio venta</label>
        <input type="number" step="0.01" id="precio_venta" class="precios" name="producto[precio_venta]" placeholder="0,00" min="0" value="<?php echo s($productos->precio_venta); ?>">
    </div>

<!-- Imagen1 -->
    <div class="campo">
        <label for="imagen1">Imagen1</label>
        <input type="file" id="imagen1" name="producto[imagen1]" placeholder="Img" accept="image/jpeg, image/png">
    </div>
    <div class="contenedor_imagen">
        <?php  if($productos->imagen1) { ?>
            <img src="/imagenes_productos/<?php echo $productos->imagen1 ?>" class="imagen">
        <?php } ?>
    </div>

<!-- Imagen2 -->
    <div class="campo">
        <label for="imagen2">Imagen2</label>
        <input type="file" id="imagen2" name="producto[imagen2]" placeholder="Img" accept="image/jpeg, image/png">
    </div>
    <div class="contenedor_imagen">
        <?php  if($productos->imagen2) { ?>
            <img src="/imagenes_productos/<?php echo $productos->imagen2 ?>" class="imagen">
        <?php } ?>
    </div>

<!-- Imagen3 -->
    <div class="campo">
        <label for="imagen3">Imagen3</label>
        <input type="file" id="imagen3" name="producto[imagen3]" placeholder="Img" accept="image/jpeg, image/png">
    </div>
    <div class="contenedor_imagen">
        <?php  if($productos->imagen3) { ?>
            <img src="/imagenes_productos/<?php echo $productos->imagen3 ?>" class="imagen">
        <?php } ?>
    </div>

<!-- Video -->
    <div class="campo">
        <label for="video">Video</label>
        <input type="file" id="video" name="producto[video]" placeholder="Imagen" accept="image/jpeg, image/png">
    </div>
    <div class="contenedor_video">
        <?php  if($productos->video) { ?>
            <video class="video" src="/videos_productos/<?php echo $productos->video ?>"></video>
        <?php } ?>
    </div>

<!-- Tienda -->
    <div class="campo">
        <label for="tienda">Tienda</label>
        <input type="text" id="tienda" name="producto[tienda]" placeholder="Tienda" value="<?php echo s($productos->tienda); ?>">
    </div>

<!-- Enlace -->
    <div class="campo">
        <label for="enlace">Enlace</label>
        <textarea name="producto[enlace]" id="enlace"><?php echo s($productos->enlace); ?></textarea>
    </div>

<!-- Fecha entrada -->
    <div class="campo">
        <label for="fecha_entrada">Entrada</label>
        <input type="date" id="fecha_entrada" class="fechas" name="producto[fecha_entrada]" value="<?php echo s($productos->fecha_entrada); ?>">
    </div>
<!-- Fecha fin novedad -->
    <div class="campo">
        <label for="fechafin_novedad">Fin novedad</label>
        <input type="date" id="fechafin_novedad" class="fechas" name="producto[fechafin_novedad]" value="<?php echo s($productos->fechafin_novedad); ?>">
    </div>
    
<!-- Boton -->
    <div class="contenedor_botones">
        <input type="submit" class="boton_verde" value="Guardar">
    </div>

