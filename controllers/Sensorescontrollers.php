<?php

// Sensores

namespace Controllers;

use MVC\Router;
use Model\Sensores;

class SensoresControllers {    

    public static function sensores_guardar_P() {
        $datos = $_POST;
        $mediciones = json_decode($datos[0]);
        
        // Guarda las mediciones
        $mediciones = new Sensores($mediciones);

        $mediciones->guardar();


    }
}

?>