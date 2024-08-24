
<!-- Formulario de productos -->

<input type="number" hidden id="id"  value="<?php echo $productos->id; ?>">

<!-- Autonumero -->
<div class="campo">
            <label for="id">Id</label>
            <?php if ($productos->autonumero) { ?>
                <input type="number" id="autonumero"  value="<?php echo $productos->autonumero; ?>" disabled >
            <?php } else { ?>
                <input type="number" id="autonumero"  value="<?php echo $autonumero; ?>" disabled >
            <?php }?>
        </div>

<!-- Categorias -->
    <div class="campo">
        <label for="familia">Familia</label>
        <select id= "select_categoria" class="select_categoria" name="producto[idcate]"  id="familia">
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

<!-- Video -->
    <div class="campo">
        <input type="file" id="video" name="producto[video]" placeholder="Video" accept="video/mp4">
    </div>
    <div class="contenedor_video">
        <?php  if($productos->video) { ?>
            <video type="video/mp4" class="video" src="/videos_productos/<?php echo $productos->video ?>"></video>
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
        <textarea id="enlace" class="enlaceProducto" name="producto[enlace]" rows="10"><?php echo s($productos->enlace); ?></textarea>
    </div>

<!-- Fechas --> 
    <div class="fechas">
        <!-- Fecha entrada -->
        <div class="campo">
                <label for="fecha_entrada">Entrada</label>
                <input type="date" id="fecha_entrada" class="fechas" name="producto[fecha_entrada]" value="<?php echo s($productos->fecha_entrada); ?>" required>
            </div>
        <!-- Fecha fin novedad -->
            <div class="campo">
                <label for="fechafin_novedad">Fin novedad</label>
                <input type="date" id="fechafin_novedad" class="fechas" name="producto[fechafin_novedad]" value="<?php echo s($productos->fechafin_novedad); ?>" required>
            </div>
    </div>

<!-- Opciones -->
    <div class="opciones">
        <div class="zona_arriba">
            <?php  if($productos->id) { ?>
                <label for="opciones">Opciones</label>
                <p>No se han agregado opciones</p> <input class="boton_verde agrega_opciones_AZ" value="Agregar opciones"></input>
            <?php } else { ?>
                <label for="opciones">Opciones</label>
                <p>No se han agregado opciones</p> <input class="boton_verde agrega_opciones_CR" value="Agregar opciones"></input>
            <?php } ?>
        </div>
     
        <div class="zona_abajo">
            <div id="contenidoOpciones"></div>
            
        </div>
    </div>

    
<!-- Boton -->
    <div class="contenedor_botones">
        <input onclick="guardarProducto()" class="boton_verde botonGuardar" value="Guardar">
    </div>
