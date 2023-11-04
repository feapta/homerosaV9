

        <!-- Tarejtas bateria y temperatura -->
        <div class="tarjetas">
            <!-- Bateria 24V -->
            <div class="bat_24 sombraTarjetas">
                <div class="tit">
                    <h5>Batería 24V</h5>
                </div>
                <div class="conte">
                    <img class="img_24" alt="Bateria">
                    <p class= "Bat24_card"></p> 
                    <p>V</p>
                </div>
            </div>

            <!-- Bateria 48V -->
            <div class="bat_48 sombraTarjetas">
                <div class="tit">
                    <h5>Batería 48V</h5>
                </div>
                <div class="conte">
                    <img class="img_48" alt="Bateria">
                    <p class= "Bat48_card"></p> 
                    <p>V</p>
                </div>
            </div>
        </div>


        <!-- Temperatura y humedad -->
        <div class="tarjetas">
            <!-- Temperatura casa -->
            <div class="temp sombraTarjetas">
                <div class="tit">
                    <h5>Temperatura</h5>
                </div>
                <div class="conte">
                    <div class="cont">
                        <p>Interior</p>
                        <div class="parrafo">
                            <p class= "temp_inte"></p> 
                            <p>º</p>
                        </div>
                    </div>
                
                    <img class="img_casa_card" src="/build/img/termometro.png" alt="">
                
                    <div class="cont">
                        <p>Exterior</p>
                        <div class="parrafo">
                            <p class= "temp_exte"></p> 
                            <p>º</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Humedad ambiente -->
            <div class="hume sombraTarjetas">
                <div class="tit">
                    <h5>Humedad</h5>
                </div>
                <div class="conte">
                    <div class="cont">
                        <p>Aire</p>
                        <div class="parrafo">
                            <p class= "hume_aire"></p> 
                            <p>&nbsp;%</p>
                        </div>
                    
                    </div>

                    <img class="img_humedad" src="/build/img/humedad.png"  alt="humedad">
                    
                    <div class="cont">
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
            <div class="agua sombraTarjetas">
                <div class="tit">
                    <h5>Nivel de agua</h5>
                </div>
                <div class="conte">
                
                    <img class="depo_agua" id="depo_100" hidden src="/build/img/agua/depo_100.png" alt="">
                    <img class="depo_agua" id="depo_90" hidden src="/build/img/agua/depo_90.png" alt="">
                    <img class="depo_agua" id="depo_80" hidden src="/build/img/agua/depo_80.png" alt="">
                    <img class="depo_agua" id="depo_70" hidden src="/build/img/agua/depo_70.png" alt="">
                    <img class="depo_agua" id="depo_60" hidden src="/build/img/agua/depo_60.png" alt="">
                    <img class="depo_agua" id="depo_50" hidden src="/build/img/agua/depo_50.png" alt="">
                    <img class="depo_agua" id="depo_40" hidden src="/build/img/agua/depo_40.png" alt="">
                    <img class="depo_agua" id="depo_30" hidden src="/build/img/agua/depo_30.png" alt="">
                    <img class="depo_agua" id="depo_20" hidden src="/build/img/agua/depo_20.png" alt="">
                    <img class="depo_agua" id="depo_10" hidden src="/build/img/agua/depo_10.png" alt="">
                    <img class="depo_agua" id="vacio" src="/build/img/agua/vacio.png" alt="">
                
                    <div class="parrafo">
                        <p id="agua"></p>
                        <p>L</p>
                    </div>
                </div>
            </div>

            <!-- Potencia solar -->
            <div class="solar sombraTarjetas">
                <div class="tit">
                    <h5>Radiación solar</h5>
                </div>
                <div class="conte">
                    <img class="img_solar" src="/build/img/solar.png"  alt="Solar">

                    <div class="parrafo">
                        <p id="watios"></p>
                        <p>W/pico</p>
                    </div>
                    


                </div>
            </div>
        </div>

        <!-- Puerta verja -->
        <div class="puerta">
            <button type="button" class="boton_verde btn_desplegable">
                 <img class="img" src="/build/img/puertas.png" alt=""> 
                 <h4>Puertas</h4>
            </button>

            <div class="desple">
                <div class="contenedor_puerta">
                    <div class="abrir_puerta">
                        <button type="button" class="boton_verde"  id="paso" onclick="puerta(2)">Puerta paso</button>
                        <button type="button" class="boton_verde"  id="vehiculos" onclick="puerta(1)">Puerta vehiculos</button>
                    </div>
                    <div class="cerrar_puerta">
                        <button type="button" class="boton_rojo"  id="cierro" onclick="puerta(3)">Cerrar</button>
                    </div>

                    <div class="foco">
                        <h5>Foco puerta</h5>

                        <div class="botones_foco">
                            <button type="button" class="boton_verde" id="foco_on" onclick="foco(1)">On</button>
                            <button type="button" class="boton_verde" id="foco_off" onclick="foco(0)">Off</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mando del taller -->
        <div class="mando">
            <button type="button" class="boton_verde btn_desplegable">
                <img class="img" src="/build/img/mando.png" alt="">
                <h4>Mando</h4>
            </button>
            <div class="desple">
                <div class="contenedor_mando">
                    <div class="inversor">
                        <h5>Inversor</h5>
                        <div class="botones_inversor">
                            <button type="button" class="boton_verde" id="inversor_on" onclick="inversor(1)">On</button>
                            <button type="button" class="boton_verde" id="inversor_on" onclick="inversor(0)">On</button>
                        </div>
                    </div>

                    <div class="termo">
                        <h5>Termo</h5>
                        <div class="botones_termo">
                            <button type="button" class="boton_verde" id="termo_on" onclick="termo(1)">On</button>
                            <button type="button" class="boton_verde" id="termo_off" onclick="termo(0)">Off</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Motor -->
        <div class="motor">
            <button type="button" class="boton_verde btn_desplegable"> 
                <img class="img" src="/build/img/grupo.png" alt="">
                <h4>Motor</h4>
            </button>

            <div class="desple">
                <div class="contenedor_motor">
                    <div class="contenedor_arriba">
                        <div class="litros">
                            <h5>Litros</h5>
                            <p id="litros_gasoil"></p><p id="l">L</p>
                        </div>

                        <img  id="img_motor" src="/build/img/motor.png" alt="">
                        
                        <div class="deposito">
                            <h5>Deposito</h5>
                            <div>
                                <div id="tanque_4"></div>
                            </div>
                            <div>
                                <div id="tanque_3"></div>
                            </div>
                            <div>
                                <div id="tanque_2"></div>
                            </div>
                            <div>
                                <div id="tanque_1"></div>
                            </div>
                        </div>
                    </div>

                    <div class="contenedor_boton">
                        <button class="boton_verde" id="btn_motor" type="button" onclick="motor()"></button>
                    </div>
                    
                    <hr>

                    <div class="contenedor_contadores">
                        <h5>Contadores</h5>

                        <div class="contadores">
                            <div class="totalHoras">
                                <h5>Total</h5>
                                <p id="total_horas" class="total"></p>
                            </div>
                            <div class="totalMes">
                                <h5>Horas mes</h5>
                                <p id="total_mes" class="mes"></p>
                            </div>
                            <div class="totalAhora">
                                <h5>Ahora</h5>
                                <p id="total_ahora" class="ahora"></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- iluminacion -->
        <div class="ilu">
            <button type="button" class="boton_verde btn_desplegable"> 
                <img class="img" src="/build/img/ilu.png" alt="">
                <h4>Iluminación</h4>
            </button>
            <div class="desple">
                <div class="contenedor_ilu">
                    <div class="contenedor_arriba">
                        <div class="lumenes">
                            <h5>Lumenes</h5>
                            <p id="lux" ></p>
                            <p>Lux</p>
                        </div>
                        <img  id="bombilla" src="/build/img/bombilla.jpg" alt="">
                        <div class="vacio">  </div>
                    </div>
                    <div class="contenedor_botones" role="group" aria-label="Basic outlined example">
                        <button id="btn_on"   class="boton_verde" type="button" onclick="ilu_envio(1)">On</button>
                        <button id="btn_auto" class="boton_verde" type="button" onclick="ilu_envio(2)">Auto</button>
                        <button id="btn_off"  class="boton_verde" type="button" onclick="ilu_envio(0)">Off</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Meteo -->
        <div class="meteo">
            <button type="button" class="boton_verde btn_desplegable">
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


    <?php $script = '<script src="/build/js/script.js"></script>'; ?>
    <?php $script .= '<script src="/build/js/agua.js"></script>'; ?>
    <?php $script .= '<script src="/build/js/gasoil.js"></script>'; ?>
    <?php $script .= '<script src="/build/js/tension24V.js"></script>'; ?>
    <?php $script .= '<script src="/build/js/tension48V.js"></script>'; ?>
    <?php $script .= '<script src="/build/js/clima.js"></script>'; ?>
    <?php $script .= '<script src="/build/js/relog.js"></script>'; ?>