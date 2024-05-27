
<!-- Pagina principal de categorias -->


<div class="contenedor categorias">
    <h3>Administracion de categorías</h3>

    <div class="contenedor_botones">
        <a href="/categorias/admin/crear" class="boton_verde ">Crear categoría</a>
        <a href="/productos/admin" class="boton_verde ">Productos</a>
        <a href="/domo" class="boton_verde ">Volver a domo</a>
    </div>
    
    <div class="contenedor_tabla">
        <table id="categorias" class="display" style="width:100%"> <!-- Entrada datatables-->
            <thead class="head_tabla">
                <tr>
                    <th>Id</th>
                    <th class="C_imagen">Imagen</th>
                    <th>Categoría</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
            </tbody>
        </table>
    </div>

</div>


<?php  $script = '<script src="/build/js/datatable/categorias.js"></script>'; ?>
