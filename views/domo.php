
<?php


?>



<!DOCTYPE HTML><html>
<html lang="es"></html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Domo Home Rosa</title>
    
        <!-- CSS only -->
        <link rel="stylesheet" href="/build/css/app.css">
    
        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/420a8cdccf.js" crossorigin="anonymous"></script>

    </head>
    
  
    <body>
        <header>
            <div class="row cyan-300 text-white text-center pt-2 pb-2">
                <div class="col-3 pt-2">
                    <h5 id="hora">Hora</h5>
                </div>
                <div class="col-6">
                    <h1 class="text-center fs-1">Home Rosa</h1>
                </div>
                <div class="col-3 pt-2">
                    <h5 id="fecha">Fecha</h5>
                </div>
            </div>  
        </header>

        <div class="container-lg">

            <!-- Tarejtas bateria y temperatura -->
            <div class="tarjetas">
                <!-- Bateria 24V -->
                <div class="bat_24">
                    <div class="tit">
                        <h5>Bateria 24V</h5>
                    </div>
                    <div class="conte">
                        <img class="img_24" alt="Bateria">
                        <p class= "Bat24_card"></p> <p>&nbsp;V</p>
                    </div>
                </div>

                <!-- Temperatura casa -->
               <!-- Bateria 24V -->
               <div class="bat_48">
                    <div class="tit">
                        <h5>Bateria 48V</h5>
                    </div>
                    <div class="conte">
                        <img class="img_48" alt="Bateria">
                        <p class= "Bat48_card"></p> <p>&nbsp;V</p>
                    </div>
                </div>
            </div>

            <!-- Humedad ambiente y suelo -->
            <div class="tarjetas">
                <!-- Temperatura casa -->
                <div class="temp">
                    <div class="tit">
                        <h5>Temperatura</h5>
                    </div>
                    <div class="conte_temp">
                        <div class="cont_inte">
                            <p>Interior</p>
                            <div class="parrafo">
                                <p class= "temp_inte"></p> 
                                <p>&nbsp;º</p>
                            </div>
                        </div>
                    
                        <img class="img_casa_card" src="/assets/images/img/termometro.png" alt="">
                    
                        <div class="cont_exte">
                            <p>Exterior</p>
                            <div class="parrafo">
                                <p class= "temp_exte"></p> 
                                <p>&nbsp;º</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Humedad ambiente -->
                <div class="humedad">
                    <div class="tit">
                        <h5>Humedad relativa</h5>
                    </div>
                    <div class="conte_hume">
                        <div class="cont_aire">
                            <p>Aire</p>
                            <div class="parrafo">
                                <p class= "hume_aire"></p> 
                                <p>&nbsp;%</p>
                            </div>
                        
                        </div>
                        <img class="img_humedad" src="/assets/images/img/humedad.png"  alt="humedad">
                       
                        <div class="cont_suelo">
                            <p>Suelo</p>
                            <div class="parrafo">
                                <p class= "hume_suelo"></p> 
                                <p>&nbsp;%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Nivel agua y Potencia solar -->
            <div class="tarjetas">
                <!-- Nivel agua -->
                <div class="agua">
                    <div class="tit">
                        <h5>Nivel de agua</h5>
                    </div>
                    <div class="conte_agua">
                    
                        <img class="depo_agua" id="depo_100" hidden src="/assets/images/agua/depo_100.png" alt="">
                        <img class="depo_agua" id="depo_90" hidden src="/assets/images/agua/depo_90.png" alt="">
                        <img class="depo_agua" id="depo_80" hidden src="/assets/images/agua/depo_80.png" alt="">
                        <img class="depo_agua" id="depo_70" hidden src="/assets/images/agua/depo_70.png" alt="">
                        <img class="depo_agua" id="depo_60" hidden src="/assets/images/agua/depo_60.png" alt="">
                        <img class="depo_agua" id="depo_50" hidden src="/assets/images/agua/depo_50.png" alt="">
                        <img class="depo_agua" id="depo_40" hidden src="/assets/images/agua/depo_40.png" alt="">
                        <img class="depo_agua" id="depo_30" hidden src="/assets/images/agua/depo_30.png" alt="">
                        <img class="depo_agua" id="depo_20" hidden src="/assets/images/agua/depo_20.png" alt="">
                        <img class="depo_agua" id="depo_10" hidden src="/assets/images/agua/depo_10.png" alt="">
                        <img class="depo_agua" id="vacio" hidden src="/assets/images/agua/vacio.png" alt="">
                    
                        <div class="parrafo">
                            <p id="agua"></p>
                            <p>&nbsp;L</p>
                        </div>
                    </div>
                </div>

                <!-- Potencia solar -->
                <div class="solar">
                    <div class="tit">
                        <h5>Radiación solar</h5>
                    </div>
                    <div class="conte_solar">
                        <img class="img_solar" src="/assets/images/img/solar.png"  alt="Solar">

                        <div class="parrafo">
                            <p id="watios"></p>
                            <p>&nbsp;W/pico</p>
                        </div>
                        
 
  
                    </div>
                </div>
            </div>


            <!-- Puerta verja -->
            <div class="row puerta">
                <div class="col-12 p-2">
                    <div class="dropdown">
                        <button class="dropdown-toggle w-100 green-400 text-white btn_ver" type="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                            <i class="fa-solid fa-door-closed"></i>&nbsp;&nbsp;&nbsp;<span>Puerta verja</span>
                        </button>

                        <ul class="dropdown-menu w-100 p-2">
                            <li>
                                <div class="row">
                                    <div class="col-6">
                                        <button type="button" class="cyan-500 w-100 boton"  id="vehiculos" onclick="puerta(1)">Puerta vehiculos</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="cyan-500 w-100 boton"  id="paso" onclick="puerta(2)">Puerta paso</button>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="pt-3" >
                                <div class="row">
                                    <div class="col-12">
                                        <button type="button" class="cyan-500 w-100 boton"  id="cierro" onclick="puerta(3)">Cerrar</button>
                                    </div>
                                </div>
                            </li>


                            <li class="text-center pt-4">
                                <h5>Foco puerta</h5>
                            </li>

                            <li class=" pt-2 pb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <button type="button" class="cyan-500 w-100 boton_foco" id="foco_on" onclick="foco(1)">On</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="cyan-500 w-100 boton_foco" id="foco_off" onclick="foco(0)">Off</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Mando del taller -->
            <div class="row mando">
                <div class="col-12 p-2">
                    <div class="dropdown">
                        <button class="dropdown-toggle w-100 green-400 text-white btn_ver" type="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                            <i class="fa-solid fa-door-closed"></i>&nbsp;&nbsp;&nbsp;<span>Mando del taller</span>
                        </button>

                        <ul class="dropdown-menu w-100 p-2">
                            <li class="text-center pt-4">
                                <h5>Conexion inversor</h5>
                            </li>

                            <li class=" pt-2 pb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <button type="button" class="cyan-500 w-100 boton " id="inversor_on" onclick="inversor(1)">On</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="cyan-500 w-100 boton " id="inversor_off" onclick="inversor(0)">Off</button>
                                    </div>
                                </div>
                            </li>

                            <li class="text-center pt-4">
                                <h5>Desconexion termo</h5>
                            </li>
                            <li class=" pt-2 pb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <button type="button" class="cyan-500 w-100 boton " id="termo_on" onclick="termo(1)">On</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="cyan-500 w-100 boton " id="termo_off" onclick="termo(0)">Off</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Motor -->
            <div class="row motor">
                <div class="col-12 p-2">  
                    <div class="dropdown">
                        <button class="dropdown-toggle indigo-200 text-white text-center w-100 btn_mot" type="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                            <i class="fa fa-cog"></i> <span>&nbsp;Motor</span>
                        </button>
                        <ul class="dropdown-menu w-100 text-center">
                            <li>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="row">
                                            <div class="col12">
                                                <h5>Litros</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span id="litros_gasoil"></span><span id="l">&nbsp;L</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <img  id="img_motor" src="/assets/images/img/motor.png" alt="">
                                    </div>
                                    <div class="col-3">
                                        <div class="row">
                                            <h5>Deposito</h5>
                                        </div>
                                        <div class="row">
                                            <div id="tanque_4"></div>
                                        </div>
                                        <div class="row">
                                            <div id="tanque_3"></div>
                                        </div>
                                        <div class="row">
                                            <div id="tanque_2"></div>
                                        </div>
                                        <div class="row">
                                            <div id="tanque_1"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <button id="btn_motor" type="button" onclick="motor()"></button>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li class="mb-2 mt-3">
                                <h5>Contadores</h5>    
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-4">
                                        <h6>Total horas</h6>
                                    </div>
                                    <div class="col-4">
                                        <h6>Total mes</h6>
                                    </div>
                                    <div class="col-4">
                                        <h6>Total ahora</h6>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-4">
                                        <div id="total_horas" class="total"></div>
                                    </div>
                                    <div class="col-4">
                                        <div id="total_mes" class="mes"></div>
                                    </div>
                                    <div class="col-4">
                                        <div id="total_ahora" class="ahora"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- iluminacion -->
            <div class="row ilu">
                <div class="col-12 p-2">
                <div class="dropdown">
                        <button class="dropdown-toggle cyan-200 text-white text-center w-100 btn_ilu" type="button" data-bs-toggle="dropdown" data-bs-auto-close="false"  aria-expanded="false">
                            <i class= "fas fa-solid fa-lightbulb"></i><span>&nbsp;&nbsp;&nbsp;Iluminación&nbsp;</span>
                        </button>

                        <ul class="dropdown-menu w-100">
                            <li>
                                <div class="row text-center">
                                    <div class="col-4">
                                        <div class="row">
                                            <h5>Lumenes</h5>
                                        </div>
                                        <div class="row">
                                            <span id="lux" ></span><span>&nbsp;Lux</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <img  id="bombilla" src="/assets/images/img/bombilla.jpg" alt="">
                                    </div>
                                </div>
                            </li>
                            <li class="p-2">
                                <div class="btn-group btn-group-lg w-100" role="group" aria-label="Basic outlined example">
                                    <button id="btn_on"   type="button" onclick="ilu_envio(1)" class="btn btn-outline-info">On</button>
                                    <button id="btn_auto" type="button" onclick="ilu_envio(2)" class="btn btn-outline-info">Auto</button>
                                    <button id="btn_off"  type="button" onclick="ilu_envio(0)" class="btn btn-outline-info">Off</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Consumos inversor 2-->
            <div class="row inver">
                <div class="col-12 p-2">
                    <div class="dropdown">
                    <button class="dropdown-toggle blue-100 text-white text-center w-100 btn_cons" type="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                        <i class="fas fa-regular fa-house"></i><span>&nbsp;&nbsp;&nbsp;Consumos I-2&nbsp;</span>
                        </button>
                        <ul class="dropdown-menu w-100 text-center">
                            <li>
                                <div class="row">
                                    <div class="col-4">
                                        <img src="/assets/images/img/bateria.jpeg" class="img_bateria" alt="">
                                    </div>
                                    <div class="col-4 col_centro_ar">
                                        <img src="/assets/images/flechas/flecha-giro-bate-inver.png" id="img_flecha-b-i" alt=""> 
                                        <img src="/assets/images/flechas/flecha-giro-inver-bate.png" id="img_flecha-i-b" alt="" hidden> 
                                        <img src="/assets/images/flechas/flecha-giro-panel.png" id="img_flecha-panel" alt="">
                                    </div>
                                    <div class="col-4">
                                        <img src="/assets/images/img/panel-solar.png" class="img_panel" alt="">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="pt-1">
                                            <span>W:&nbsp;</span><span id="wat_b"></span>
                                            <span>A:&nbsp;</span><span id="amp_b"></span>
                                            <hr>
                                        </div>
                                        <div class="pt-1">
                                            <span>W:&nbsp;</span><span id="wat_c">250.00</span>
                                            <span>A:&nbsp;</span><span id="amp_c">1.00</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <img src="/assets/images/img/inversor.jpg" class="img_inversor" alt="">
                                    </div>
                                    <div class="col-4">
                                        <div class="pt-1">
                                            <span>W:&nbsp;</span><span id="wat_s">335.00</span>
                                            <span>A:&nbsp;</span><span id="amp_s">9.00</span>
                                            <hr>
                                        </div>
                                        <div class="pt-1">
                                            <span>W:&nbsp;</span><span id="wat_g">250.00</span>
                                            <span>A:&nbsp;</span><span id="amp_g">10.00</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-4">
                                        <img src="/assets/images/img/casa-rosa.png" class="img_casa" alt="">
                                    </div>
                                    <div class="col-4 col_centro_ar">
                                        <img src="/assets/images/flechas/flecha-giro-casa.png" id="img_flecha-casa" class="animacion_2" alt="">
                                        <img src="/assets/images/flechas/flecha-giro-grupo.png" id="img_flecha-grupo" alt="">
                                    </div>
                                    <div class="col-4">
                                        <img src="/assets/images/img/motor.png" class="img_motor" alt="">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Meteo -->
            <div class="row meteo"> 
                <div class="col-12 p-2">
                    <div class="dropdown">
                        <button class="dropdown-toggle blue-100 text-white w-100 btn_met" type="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                            <i class="fa-regular fa-sun"></i>&nbsp;&nbsp;&nbsp;<span>Meteorologia</span>
                        </button>
                        <ul class="dropdown-menu w-100 text-center">
                            <li>
                                <div class="row ">
                                    <div class="col-4">
                                        <h5 id="cityName"></h5>
                                    </div>
                                    <div class="col-4">
                                        <h6 id="nubes_des"></h6>
                                    </div>
                                    <div class="col-4">
                                        <span>Temp:&nbsp;</span><span id="temp_m"></span><span>&nbsp;&deg;</span>
                                    </div>
                                </div>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <div class="row mb-3">
                                <!-- Columna izquierda -->
                                <div class="col-4 m-0 p-0">
                                    <div class="row me-2">
                                        <div class="col-6 text-end pe-2" >
                                            <i class="fas fa-temperature-high" style="color: rgb(130, 157, 245);"></i>
                                        </div>
                                        <div class="col-6 text-start">
                                            <span id="te_max">20.51</span><span>&nbsp;&deg;</span>
                                        </div>
                                    </div>

                                    <div class="row me-2">
                                        <div class="col-6 text-end pe-2">
                                            <i class="fas fa-temperature-low" style="color: rgb(130, 157, 245);"></i>
                                        </div>
                                        <div class="col-6 text-start">
                                            <span id="te_min">16.52</span><span>&nbsp;&deg;</span>
                                        </div>
                                    </div>

                                    <div class="row me-2">
                                        <div class="col-6 text-end pe-2">
                                            <i class="fas fa-tint" style="color: rgb(130, 157, 245);"></i>&nbsp;
                                        </div>
                                        <div class="col-6 text-start">
                                            <span id="humi_m">75</span><span>&nbsp;%</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Columna centro arriba -->
                                <div class="col-4 m-0 p-0">
                                    <img id="wicon" src="" alt="">
                                </div>
                                
                                <!-- Columna derecha arriba -->
                                <div class="col-4 m-0 p-0">
                                    <div class="row me-2">
                                        <div class="col-5 text-end">
                                            <i class="fas fa-wind" style="color: rgb(130, 157, 245);"></i>
                                        </div>
                                        <div class="col-7 text-start">
                                            <span id="pres"></span><span>&nbsp;mlb</span>
                                        </div>
                                    </div>

                                    <div class="row me-2">
                                        <div class="col-5 text-end">
                                            <i class="fas fa-compress-arrows-alt" style="color: rgb(130, 157, 245);"></i>
                                        </div>
                                        <div class="col-7 text-start">
                                            <span id="alt"></span><span>&nbsp;&nbsp;&nbsp;mtr&nbsp;&nbsp;</span>
                                        </div>
                                    </div>

                                </div>

                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <div class="row">
                                    <div class="col-4">
                                        <span>Veloc:&nbsp;</span></samp><span id=velo_win></span>&nbsp;<span>m/s</span>
                                    </div>
                                    <div class="col-4">
                                        <span>Direc:&nbsp;<span id=dire_win></span><span>&nbsp;º</span>
                                    </div>
                                    <div class="col-4">
                                        <span>Rafag:&nbsp;<span id=gust_win></span>&nbsp;<span>m/s</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row p-2">
                                    <div class="col-6">
                                        
                                        <!-- Card 1 -->
                                        <div class="card">
                                            <!-- Fila 1 -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <span>Dia:&nbsp;</span><Span id="diaa0"></Span>
                                                </div>
                                            </div>

                                            <!-- Fila 2 -->
                                            <div class="row">
                                                
                                            <!-- Columna D -->
                                                <div class="col-4">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span>Tem:&nbsp;</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <Span id="temp0"></Span><span>&nbsp;&deg;</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Columna C -->
                                                <div class="col-4">
                                                    <img id="wicon0" src="" alt="Weather icon">
                                                </div>

                                                <!-- Columna I -->
                                                <div class="col-4">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span>Hum:&nbsp;</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <Span id="humi0"></Span><span>&nbsp;%</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            <!-- Fila 3 -->
                                                <div class="row m-0 p-0">
                                                    <div class="col-6">
                                                        <span>T. max:&nbsp;</span><Span id="temp_x0"></Span><span>&nbsp;&deg;</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <span>T. min:&nbsp;</span><Span id="temp_m0"></Span><span>&nbsp;&deg;</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-6">
                                        
                                        <!-- Card 2 -->
                                        <div class="card">
                                            <!-- Fila 1 -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <span>Dia:&nbsp;</span><Span id="diaa1"></Span>
                                                </div>
                                            </div>

                                            <!-- Fila 2 -->
                                            <div class="row">
                                                
                                            <!-- Columna D -->
                                                <div class="col-4">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span>Tem:&nbsp;</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <Span id="temp1"></Span><span>&nbsp;&deg;</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Columna C -->
                                                <div class="col-4">
                                                    <img id="wicon1" src="" alt="Weather icon">
                                                </div>

                                                <!-- Columna I -->
                                                <div class="col-4">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span>Hum:&nbsp;</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <Span id="humi1"></Span><span>&nbsp;%</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            <!-- Fila 3 -->
                                                <div class="row m-0 p-0">
                                                    <div class="col-6">
                                                        <span>T. max:&nbsp;</span><Span id="temp_x1"></Span><span>&nbsp;&deg;</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <span>T. min:&nbsp;</span><Span id="temp_m1"></Span><span>&nbsp;&deg;</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row p-2">
                                    <div class="col-6">
                                        
                                        <!-- Card 3 -->
                                        <div class="card">
                                            <!-- Fila 1 -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <span>Dia:&nbsp;</span><Span id="diaa2"></Span>
                                                </div>
                                            </div>

                                            <!-- Fila 2 -->
                                            <div class="row">
                                                
                                            <!-- Columna D -->
                                                <div class="col-4">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span>Tem:&nbsp;</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <Span id="temp2"></Span><span>&nbsp;&deg;</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Columna C -->
                                                <div class="col-4">
                                                    <img id="wicon2" src="" alt="Weather icon">
                                                </div>

                                                <!-- Columna I -->
                                                <div class="col-4">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span>Hum:&nbsp;</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <Span id="humi2"></Span><span>&nbsp;%</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            <!-- Fila 3 -->
                                                <div class="row m-0 p-0">
                                                    <div class="col-6">
                                                        <span>T. max:&nbsp;</span><Span id="temp_x2"></Span><span>&nbsp;&deg;</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <span>T. min:&nbsp;</span><Span id="temp_m2"></Span><span>&nbsp;&deg;</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-6">
                                        
                                        <!-- Card 4 -->
                                        <div class="card">
                                            <!-- Fila 1 -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <span>Dia:&nbsp;</span><Span id="diaa3"></Span>
                                                </div>
                                            </div>

                                            <!-- Fila 2 -->
                                            <div class="row">
                                                
                                            <!-- Columna D -->
                                                <div class="col-4">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span>Tem:&nbsp;</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <Span id="temp3"></Span><span>&nbsp;&deg;</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Columna C -->
                                                <div class="col-4">
                                                    <img id="wicon3" src="" alt="Weather icon">
                                                </div>

                                                <!-- Columna I -->
                                                <div class="col-4">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span>Hum:&nbsp;</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <Span id="humi3"></Span><span>&nbsp;%</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            <!-- Fila 3 -->
                                                <div class="row m-0 p-0">
                                                    <div class="col-6">
                                                        <span>T. max:&nbsp;</span><Span id="temp_x3"></Span><span>&nbsp;&deg;</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <span>T. min:&nbsp;</span><Span id="temp_m3"></Span><span>&nbsp;&deg;</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-6"> 
                                        <span>Hora amanece:&nbsp;&nbsp;</span><span id="hora_ama"></span>
                                    </div>
                                    <div class="col-6">
                                        <span>Hora anochece:&nbsp;&nbsp;</span><span id="hora_no" ></span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <!-- Footer -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="footer cyan-300 p-2 m-2">
                    <div class="row p-2 text-center">
                        <a href="/index.php"><span class="material-symbols-outlined text-white">logout </span></a>
                    </div>
                </div>
            </div>
        </div>


        <script src="/scripts/script.js"></script>
        <script src="/scripts/agua.js"></script>
        <script src="/scripts/gasoil.js"></script>
        <script src="/scripts/tension24V.js"></script>
        <script src="/scripts/tension48V.js"></script>
        <script src="/scripts/clima.js"></script>
        <script src="/scripts/relog.js"></script>


    </body>
</html>
  