<?php

// Sensores

namespace Controllers;

use MVC\Router;
use Model\Sensores;

class SensoresControllers {    

        public static function listar(){
            $diaCC = date ( 'j');
            $mesCC = date ( 'm');
            $yeaCC = date ( 'Y');
              
            $consulta = " SELECT te, te_in, hu, hu_su FROM medidas";
            $consulta .= " WHERE d = $diaCC AND m= $mesCC AND y = $yeaCC";

            $respuesta = Sensores::SQL($consulta);

            $jsonstring_CC = json_encode($respuesta);
            echo $jsonstring_CC;
      
    }
  }
  
  
 
?>

