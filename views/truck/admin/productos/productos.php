
<!-- Pagina carta general -->

<div class="contenedor productos">
    <h3>Listado de productos</h3>

    <div class="contenedor_botones">
        <a href="/productos/admin/crear" class="boton_verde ">Crear producto</a>
        <a href="/categorias/admin" class="boton_verde ">Categorias</a>
        <a href="/domo" class="boton_verde ">Volver a domo</a>
    </div>

    <div class="contenedor_tabla">
        <table id="productos" class="display" style="width:100%">
            <thead class="head_tabla">
                <tr>
                    <th>Id</th>
                    <th class="C_imagen">imagen</th>
                    <th>Categoria</th>
                    <th>Título</th>
                    <th>Uds.</th>
                    <th>Precio C.</th>
                    <th>Envio</th>
                    <th>Precio V</th>
                    <th>Creada</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
            </tbody>
        </table>
    </div>
   
</div>

<?php $script = '<script src="/build/js/datatable/productos.js"></script>'; ?>