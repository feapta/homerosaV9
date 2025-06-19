<?php

  $peticion ="";
  $peticion = ($_POST['peticion']);
  $mesEN ="";
  $mesEN = ($_POST['mesEN']);
  $yeaEN ="";
  $yeaEN = ($_POST['yeaEN']);

if ($peticion == 1) {
  $fecha = date('Y-m-j');
  $nuevafecha = strtotime ( '-1 day' , strtotime ( $fecha ) ) ;
  $diaB = date ( 'j' , $nuevafecha );
  $mesB = date ( 'm' , $nuevafecha );
  $yeaB = date ( 'Y' , $nuevafecha );

  // Media del dia anterior
  $resultado1 = $conexion->query("SELECT AVG (`sen_med_s1`) AS `1` FROM `sensores` WHERE `sen_dia`= '".$diaB."'AND `sen_mes`= '".$mesB."' AND `sen_yea`= '".$yeaB."'");
  $mediadia1 = $resultado1->fetch_all(MYSQLI_ASSOC);
  $valor1 = $mediadia1[0][1];
  $valor1 = round($valor1,2);
    echo $valor1;

}

if ($peticion == 2) {
  $fecha = date('Y-m-j');
  $nuevafecha = strtotime ( '-1 day' , strtotime ( $fecha ) ) ;
  $diaB = date ( 'j' , $nuevafecha );
  $mesB = date ( 'm' , $nuevafecha );
  $yeaB = date ( 'Y' , $nuevafecha );

  // Media del dia anterior
  $resultado2 = $conexion->query("SELECT AVG(`sen_med_s2`) AS `1` FROM `sensores` WHERE `sen_dia`= '".$diaB."'AND `sen_mes`= '".$mesB."' AND `sen_yea`= '".$yeaB."'");
  $mediadia2 = $resultado2->fetch_all(MYSQLI_ASSOC);
  $valor2 = $mediadia2[0][1];
  $valor2 = round($valor2,2);
    echo $valor2;
}

if ($peticion == 3) {
  $fecha = date('Y-m-j');
  $nuevafecha = strtotime ( '-1 day' , strtotime ( $fecha ) ) ;
  $diaB = date ( 'j' , $nuevafecha );
  $mesB = date ( 'm' , $nuevafecha );
  $yeaB = date ( 'Y' , $nuevafecha );

  // Media del mes anterior
  $resultado3 = $conexion->query("SELECT AVG(`sen_med_s1`) AS `1` FROM `sensores` WHERE `sen_mes`= '".$mesB."' AND `sen_yea`= '".$yeaB."'");
  $mediadia3 = $resultado3->fetch_all(MYSQLI_ASSOC);
  $valor3 = $mediadia3[0][1];
  $valor3 = round($valor3,2);
    echo $valor3;
}

if ($peticion == 4) {
  $fecha = date('Y-m-j');
  $nuevafecha = strtotime ( '-1 day' , strtotime ( $fecha ) ) ;
  $diaB = date ( 'j');
  $mesB = date ( 'm');
  $yeaB = date ( 'Y' , $nuevafecha );

  // Media del mes anterior
  $resultado4 = $conexion->query("SELECT AVG(`sen_med_s2`) AS `1` FROM `sensores` WHERE `sen_mes`= '".$mesB."' AND `sen_yea`= '".$yeaB."'");
  $mediadia4 = $resultado4->fetch_all(MYSQLI_ASSOC);
  $valor4 = $mediadia4[0][1];
  $valor4 = round($valor4,2);
    echo $valor4;
}

// Graficas de las ultimas 6 horas
if ($peticion == 5) {
  date_default_timezone_set('Europe/Madrid');
  $hora = date("G");
  $dia = date("d");
  $mes = date("m");
  $yea = date("Y");

  if ($hora >= 6){$horaA = $hora - 5;}
  if ($hora == 5){$horaA = 11;}
  if ($hora == 4){$horaA = 10;}
  if ($hora == 3){$horaA = 9;}
  if ($hora == 2){$horaA = 8;}
  if ($hora == 1){$horaA = 7;}

  $consultaS = "SELECT `sen_hora`,`sen_med_s1`,`sen_med_s2` FROM `sensores` WHERE `sen_hora` BETWEEN '".$horaA."' AND '".$hora."' AND `sen_dia`= '".$dia."' AND `sen_mes`= '".$mes."' AND `sen_yea`= '".$yea."' ORDER BY `sen_hora` ASC";
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

// Informacion de la ultima hora
if ($peticion == 6) {
    $consulta_TH = "SELECT `temp`,`hume`,`sen_med_s1`,`sen_med_s2`, `lat`, `lon`, `ip`, `rssi`, `bateria` FROM `sensores` ORDER BY `sen_id`DESC LIMIT 1";
    $resultado_TH = mysqli_query($conexion, $consulta_TH);

      while($row = mysqli_fetch_array($resultado_TH)) {
        $json_TH[] = array(
          'temp' => $row['temp'],
          'hume' => $row['hume'],
          'sen_med_s1' => $row['sen_med_s1'],
          'sen_med_s2' => $row['sen_med_s2'],
          'lat' => $row['lat'],
          'lon' => $row['lon'],
          'ip' => $row['ip'],
          'rssi' => $row['rssi'],
          'bateria' => $row['bateria'],
        );
      }
      $jsonstring_TH = json_encode($json_TH);
      echo $jsonstring_TH;
}



// Graficas medias dia para grafica mensual
if ($peticion == 7) {
      $yea = date ( 'Y');
      $consulta_dia = "SELECT `med_dia`, `med_med_s1`, `med_med_s2` FROM `medias_dia` WHERE `med_mes`= '".$mesEN."' AND `med_yea`= '".$yea."'ORDER BY `med_dia` ASC";
      $resultado_dia = mysqli_query($conexion, $consulta_dia);

      $json = array();
      while($row = mysqli_fetch_array($resultado_dia)) {
        $json[] = array(
          'med_dia' => $row['med_dia'],
          'med_med_s1' => $row['med_med_s1'],
          'med_med_s2' => $row['med_med_s2'],
        );
      }
      $jsonstring_dia = json_encode($json);
        echo $jsonstring_dia;
}

// Graficas medias mes para grafica anual
if ($peticion == 8) {
      $yea = date("Y");
      $consulta_mes = "SELECT `med_mes`, `med_mes_s1`, `med_mes_s2` FROM `medias_mes` WHERE `med_yea`= '".$yeaEN."' ORDER BY `med_mes` ASC";
      $resultado_mes = mysqli_query($conexion, $consulta_mes);

      $json = array();
      while($row = mysqli_fetch_array($resultado_mes)) {
        $json[] = array(
          'med_mes' => $row['med_mes'],
          'med_mes_s1' => $row['med_mes_s1'],
          'med_mes_s2' => $row['med_mes_s2'],
        );
      }
      $jsonstring_mes = json_encode($json);
        echo $jsonstring_mes;
  }



// Grafica completa dia anterior
if ($peticion == 9){
        $diaC = date ( 'j') - 1;
        $mesC = date ( 'm');
        $yeaC = date ( 'Y');
        $consulta_C = "SELECT `sen_hora`,`sen_med_s1`,`sen_med_s2` FROM `sensores` WHERE `sen_dia`= '".$diaC."' AND `sen_mes`= '".$mesC."' AND `sen_yea`= '".$yeaC."' ORDER BY `sen_hora` ASC";
        $resultado_C = mysqli_query($conexion, $consulta_C);
        
          $json = array();
          while($row = mysqli_fetch_array($resultado_C)) {
            $json[] = array(
              'sen_hora' => $row['sen_hora'],
              'sen_med_s1' => $row['sen_med_s1'],
              'sen_med_s2' => $row['sen_med_s2'],
            );
          }
          $jsonstring_C = json_encode($json);
            echo $jsonstring_C;
    }


// Grafica completa dia en curso
if ($peticion == 10){
    $diaCC = date ( 'j');
    $mesCC = date ( 'm');
    $yeaCC = date ( 'Y');
    $consulta_CC = "SELECT `sen_hora`,`sen_med_s1`,`sen_med_s2` FROM `sensores` WHERE `sen_dia`= '".$diaCC."' AND `sen_mes`= '".$mesCC."' AND `sen_yea`= '".$yeaCC."' ORDER BY `sen_hora` ASC";
      
      $resultado_CC = mysqli_query($conexion, $consulta_CC);
      $json = array();
      while($row = mysqli_fetch_array($resultado_CC)) {
        $json[] = array(
          'sen_hora' => $row['sen_hora'],
          'sen_med_s1' => $row['sen_med_s1'],
          'sen_med_s2' => $row['sen_med_s2'],
        );
      }
      $jsonstring_CC = json_encode($json);
        echo $jsonstring_CC;
}
  
if ($peticion == 11) {
  $consulta_TH = "SELECT `lat`, `lon` FROM `sensores` ORDER BY `sen_id`DESC LIMIT 1";
  $resultado_TH = mysqli_query($conexion, $consulta_TH);

    while($row = mysqli_fetch_array($resultado_TH)) {
      $json_TH[] = array(
        'lat' => $row['lat'],
        'lon' => $row['lon'],
      );
    }
    $jsonstring_TH = json_encode($json_TH);
    echo $jsonstring_TH;
}