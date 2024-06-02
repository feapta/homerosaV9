



<!-- Titulo -->
    <div class="campo">
        <label for="titulo">Título</label>
        <input type="text" id="titulo" name="trabajo[titulo]" placeholder="Título" value="<?php echo s($trabajos->titulo); ?>">
    </div>

<!-- Descripcion -->
    <div class="campo">
        <label for="descripcion">Descripción</label>
        <textarea name="trabajo[descripcion]" class="descripcion" rows="5"><?php echo s($trabajos->descripcion); ?></textarea>
    </div>

<!-- Imagen1 -->
    <div class="campo">
        <div class="file-1" >
            <input type="file" name="trabajo[imagen1]" placeholder="Img" accept="image/jpeg, image/png">
        </div>
    </div>
    <div class="contenedor_imagen">
        <?php  if($trabajos->imagen1) { ?>
            <img src="/imagenes_trabajos/<?php echo $trabajos->imagen1 ?>" class="imagen">
        <?php } ?>
    </div>



<!-- Imagen2 -->
    <div class="campo">
        <div class="file-2">
            <input type="file" id="imagen2" name="trabajo[imagen2]" placeholder="Img" accept="image/jpeg, image/png">
        </div>
    </div>
    <div class="contenedor_imagen">
        <?php  if($trabajos->imagen2) { ?>
            <img src="/imagenes_trabajos/<?php echo $trabajos->imagen2 ?>" class="imagen">
        <?php } ?>
    </div>

<!-- Imagen3 -->
    <div class="campo">
        <div class="file-3">
            <input type="file" id="imagen3" name="trabajo[imagen3]" placeholder="Img" accept="image/jpeg, image/png">
        </div>
    </div>
    <div class="contenedor_imagen">
        <?php  if($trabajos->imagen3) { ?>
            <img src="/imagenes_trabajos/<?php echo $trabajos->imagen3 ?>" class="imagen">
        <?php } ?>
    </div>

<!-- Video -->
    <div class="campo">
        <div class="file-4">
            <input type="file" id="video" name="trabajo[video]" placeholder="Video" accept="video/mp4">
        </div>
    </div>
    <div class="contenedor_video">
        <?php  if($trabajos->video) { ?>
            <video type="video/mp4" class="video" src="/videos_trabajos/<?php echo $trabajos->video ?>" controls></video>
        <?php } ?>
    </div>

<!-- Fecha entrada -->
        <div class="campo">
            <label for="fecha_entrada">Entrada</label>
            <input type="date" id="fecha_entrada" class="fechas" name="trabajo[fecha_entrada]" value="<?php echo s($trabajos->fecha_entrada); ?>">
        </div>


<!-- Boton -->
    <div class="contenedor_botones">
        <input type="submit" class="boton_verde" value="Guardar">
    </div>

