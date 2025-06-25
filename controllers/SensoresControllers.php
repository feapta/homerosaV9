<?php

// Sensores

namespace Controllers;

use MVC\Router;
use Model\Sensores;

class SensoresControllers {    

        public static function listar(){
            date_default_timezone_set('Europe/Madrid');
            $mesCC = date ( 'n');
            $yeaCC = date ( 'Y');
            $horaCC = date( 'G');

            $horadif = $horaCC - 23;
            $horadifposi = abs($horadif);
              
            $consulta = " SELECT h, te, te_in, hu, hu_su FROM medidas";
            $consulta .= " WHERE h";
            $consulta .= " BETWEEN $horadifposi AND $horaCC AND m = $mesCC AND y = $yeaCC";

            $respuesta = Sensores::SQL($consulta);

            $jsonstring_CC = json_encode($respuesta);
            echo $jsonstring_CC;
      
    }
  }
  
  /* Graficas de las ultimas 6 horas
if ($peticion == 5) {
  date_default_timezone_set('Europe/Madrid');
  $hora = date("G");
  $dia = date("d");
  $mes = date("m");
  $yea = date("Y");
  $today = date("Y-m-d H:i:s");    

  if ($hora >= 6){$horaA = $hora - 5;}
  if ($hora == 5){$horaA = 11;}
  if ($hora == 4){$horaA = 10;}
  if ($hora == 3){$horaA = 9;}
  if ($hora == 2){$horaA = 8;}
  if ($hora == 1){$horaA = 7;}


  $consulta = " SELECT h, te, te_in, hu, hu_su FROM medidas";
  $consulta .= " WHERE d = $diaCC AND m= $mesCC AND y = $yeaCC";

  $consultaS = WHERE `h` BETWEEN '".$todayG."' AND '".$today."' AND `sen_dia`= '".$dia."' AND `sen_mes`= '".$mes."' AND `sen_yea`= '".$yea."' ORDER BY `sen_hora` ASC";
  $resultadoS = mysqli_query($conexion, $consultaS);
  $json = array();
  while($row = mysqli_fetch_array($resultadoS)) {
    $json[] = array(
      'sen_hora' => $row['sen_hora'],
      'sen_med_s1' => $row['sen_med_s1'],
      'sen_med_s2' => $row['sen_med_s2'],
    );
  }
  $jsonstringS = json_encode($json);
    echo $jsonstringS;
}
 */
?>

