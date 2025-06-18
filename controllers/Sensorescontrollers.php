<?php

// Sensores

namespace Controllers;

use MVC\Router;
use Model\Sensores;

class SensoresControllers {    

        public static function Temp_listar(){
          $temperaturas = Sensores::temp();

          foreach($temperaturas as $data){
              $json['data'][] = $data;
          }
    
            $jsonstring = json_encode($json);
            echo $jsonstring;
    }


        public static function Hume_listar(){
          $humedades = Sensores::hume();

          foreach($humedades as $data){
              $json['data'][] = $data;
          }
    
            $jsonstring = json_encode($json);
            echo $jsonstring;
    }
}

?>