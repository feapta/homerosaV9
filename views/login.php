

<!-- Pagina de login -->

<div class="contenedorLogin">

    
    <?php if($alertas) { ?>
            <?php include_once __DIR__ . "/../templates/alertas.php";  ?>
    <?php } ?>

    <form class="formulario sombraCaja" method="POST" novalidate>
        <div class="campo">
            <p class="titulo">Introduzca datos de acceso</p>
        </div>
        <div class="campo">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Tu Email" name="email" required>
        </div>

        <div class="mostrarPassword">
            <div class="campo Pass">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="campo Img">
                <img id="ima-1" class="ocultarPass"src="/build/img/mostrar.webp" alt="">
                <img id="ima-2" src="/build/img/esconder.webp" alt="">
            </div>
        </div>

        <div class="contenedor">
            <input type="submit" class="boton_verde" value="Iniciar sesión">
        </div>
    </form>

</div>

<?php $script = '<script src="/build/js/mostrar_pass_acceso.js"></script>'; ?>


