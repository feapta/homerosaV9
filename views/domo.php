

        <!-- Tarejtas bateria y temperatura -->
        <div class="tarjetas">
            <?php include_once __DIR__ . "/tarjetas/baterias.php";  ?>
        </div>

        <!-- Temperatura y humedad -->
        <div class="tarjetas">
            <?php include_once __DIR__ . "/tarjetas/temphume.php";  ?>
        </div>

        <!-- Nivel agua y Potencia solar -->
        <div class="tarjetas">
            <?php include_once __DIR__ . "/tarjetas/aguasolar.php";  ?>
        </div>
        
        <!-- Nivel gas cocina y lluvias-->
        <div class="tarjetas">
            <?php include_once __DIR__ . "/tarjetas/gas-lluvia.php";  ?>
        </div>

        <!-- Puerta verja -->
        <div class="puerta">
            <?php include_once __DIR__ . "/puerta.php";  ?>
        </div>

        <!-- Mando del taller -->
        <div class="mando">
            <?php include_once __DIR__ . "/mando.php";  ?>
        </div>

        <!-- Motor -->
        <div class="motor">
            <?php include_once __DIR__ . "/motor.php";  ?>
        </div>

        <!-- iluminacion -->
        <div class="ilu">
            <?php include_once __DIR__ . "/ilu.php";  ?>
        </div>

        <!-- Piscina -->
        <div class="piscina">
            <?php include_once __DIR__ . "/piscina.php";  ?>
        </div>

        <!-- Meteo -->
        <div class="meteo">
            <button type="button" class="boton_verde">
                <img class="img" src="/build/img/meteorologia.png" alt="">
                <h4>Meteorología</h4>
            </button>

            <div class="desple">
                <div class="contenedor_meteo">
                    <?php include_once __DIR__ . "/meteo.php";  ?>
                </div>
            </div>
        </div>

        <!-- Cerrar sesion -->
        <div class="cerrar">
            <a class="boton_rojo cerrar_sesion" href="/logout"> 
                <img class="img" src="/build/img/cerrar-sesion.png" alt=""> 
                <h4>Cerrar sesión</h4>
            </a>
        </div>


    <?php $script = '<script src="/build/js/broker.js"></script>'; ?>
    <?php $script .= '<script src="/build/js/funciones.js"></script>'; ?>
    <?php $script .= '<script src="/build/js/agua.js"></script>'; ?>
    <?php $script .= '<script src="/build/js/gasoil.js"></script>'; ?>
    <?php $script .= '<script src="/build/js/tension24V.js"></script>'; ?>
    <?php $script .= '<script src="/build/js/tension48V.js"></script>'; ?>
    <?php $script .= '<script src="/build/js/meteo.js"></script>'; ?>
    <?php $script .= '<script src="/build/js/relog.js"></script>'; ?>
    <?php $script .= '<script src="/build/js/gas.js"></script>'; ?>
    <?php $script .= '<script src="/build/js/lluvia.js"></script>'; ?>
    <?php $script .= '<script type="module" src="/build/js/chart.js" ><script>'; ?>