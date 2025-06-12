<?php

// Sensores

namespace Controllers;

use MVC\Router;
use Model\Sensores;

class SensoresControllers {    

    public static function sensores_guardar_P() {
        $datos = $_POST;
          //debuguear($datos);

        // Guarda las mediciones
        $mediciones = new Sensores($datos);

        $mediciones->guardar();


    }
}

?>