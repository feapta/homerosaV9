
<!-- Pagina principal de categorias -->


<div class="contenedor categorias">
    <h3>Administracion de categorías</h3>

    <div class="contenedor_botones">
        <a href="/admin/categorias/crear" class="boton_verde ">Crear categoría</a>
    </div>
    
        <div class="tabla">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Categoria</th>
                        <th>Imagen</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($categorias as $cate) { ?>
                        <tr>
                            <td><p><?php echo $cate->idcatepro; ?></p></td>
                            <td><p><?php echo $cate->categoria; ?></p></td>
                            <td><img src="/imagenes_categorias/<?php echo $cate->imagen; ?>" alt="Imagen"></td>
                            <td>Edicion</td>
                            <td>Eliminar</td>
                        </tr>
                    <?php } ?>
                </tbody>
                
            </table>
        </div>

</div>


<!-- <?php  //$script = '<script src="/build/js/datatable/categorias.js"></script>'; ?> -->