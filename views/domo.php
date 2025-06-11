

        <!-- Informacion -->
        <div class="tarjetas">
            <?php include_once __DIR__ . "/tarjetas/pilotos.php";  ?>
        </div>

        <!-- Baterias -->
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
            <?php include_once __DIR__ . "/paginas/puerta.php";  ?>
        </div>

        <!-- Termo -->
        <div class="termo">
            <?php include_once __DIR__ . "/paginas/termo.php";  ?>
        </div>

        <!-- Motor -->
        <div class="motor">
            <?php include_once __DIR__ . "/paginas/motor.php";  ?>
        </div>

        <!-- iluminacion -->
        <div class="ilu">
            <?php include_once __DIR__ . "/paginas/ilu.php";  ?>
        </div>

        <!-- Piscina -->
        <div class="piscina">
            <?php include_once __DIR__ . "/paginas/piscina.php";  ?>
        </div>

        <!-- Meteo -->
        <div class="meteo">
            <?php include_once __DIR__ . "/paginas/meteo.php";  ?>
        </div>
       
        <!-- Graficas -->
        <div class="graficas">
            <?php include_once __DIR__ . "/paginas/graficas.php";  ?>
        </div>


        <!-- Truck -->
        <div class="truck">
            <?php include_once __DIR__ . "/paginas/camiones.php";  ?>
        </div>

        
        <!-- Cerrar sesion -->
        <div class="cerrar">
            <a class="boton_rojo cerrar_sesion" href="/logout"> 
                <img class="img" src="/build/img/cerrar-sesion.png" alt=""> 
                <h4>Cerrar sesión</h4>
            </a>
        </div>

   
   
        <?php $script = '<script src="/build/js/funciones.js"></script>'; ?>
        <?php $script .= '<script src="/build/js/agua.js"></script>'; ?>
        <?php $script .= '<script src="/build/js/iluminacion.js"></script>'; ?>
        <?php $script .= '<script src="/build/js/piscina.js"></script>'; ?>
        <?php $script .= '<script src="/build/js/termos.js"></script>'; ?>
        <?php $script .= '<script src="/build/js/gasoil.js"></script>'; ?>
        <?php $script .= '<script src="/build/js/tension24V.js"></script>'; ?>
        <?php $script .= '<script src="/build/js/tension48V.js"></script>'; ?>
        <?php $script .= '<script src="/build/js/meteo.js"></script>'; ?>
        <?php $script .= '<script src="/build/js/relog.js"></script>'; ?>
        <?php $script .= '<script src="/build/js/gas.js"></script>'; ?>
        <?php $script .= '<script src="/build/js/lluvia.js"></script>'; ?>
        <?php $script .= '<script type="module" src="/build/js/broker.js"></script>'; ?>