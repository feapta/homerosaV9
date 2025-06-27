<?php

// Sensores

namespace Controllers;

use MVC\Router;
use Model\Sensores;

class SensoresControllers {    

        public static function listar(){
            $consulta = "SELECT id, h, te, te_in, hu, hu_su FROM medidas ORDER BY id DESC LIMIT 20";
            $respuesta = Sensores::SQL($consulta);
            $jsonstring_CC = json_encode($respuesta);
            echo $jsonstring_CC;
      
    }
  }
 