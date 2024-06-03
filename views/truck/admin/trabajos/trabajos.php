
<!-- Pagina carta general -->

<div class="contenedor listado_trabajos">
    <div class="contenedor_botones">
        <a href="/trabajos/admin/crear" class="boton_verde ">Crear trabajo</a>
        <a href="/domo" class="boton_verde ">Volver a domo</a>
    </div>

    <h1 class="nombre_pagina">Listado trabajos</h1>

    <div class="contenedor_tabla">
        <table id="trabajos" class="display" style="width:100%">
            <thead class="head_tabla">
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Descripcion</th>
                    <th>img 1</th>
                    <th>img 2</th>
                    <th>img 3</th>
                    <th>Video</th>
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

<?php $script = '<script src="/build/js/datatable/trabajos.js"></script>'; ?>