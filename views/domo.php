
        <div class="contenedor domo">

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
                        <p>&nbsp;V</p>
                    </div>
                </div>

                <!-- Temperatura casa -->
               <!-- Bateria 24V -->
               <div class="bat_48 sombraTarjetas">
                    <div class="tit">
                        <h5>Batería 48V</h5>
                    </div>
                    <div class="conte">
                        <img class="img_48" alt="Bateria">
                        <p class= "Bat48_card"></p> 
                        <p>&nbsp;V</p>
                    </div>
                </div>
            </div>

            <!-- Humedad ambiente y suelo -->
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
                                <p>&nbsp;º</p>
                            </div>
                        </div>
                    
                        <img class="img_casa_card" src="/build/img/termometro.png" alt="">
                    
                        <div class="cont">
                            <p>Exterior</p>
                            <div class="parrafo">
                                <p class= "temp_exte"></p> 
                                <p>&nbsp;º</p>
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
                            <p>&nbsp;L</p>
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
                            <p>&nbsp;W/pico</p>
                        </div>
                        
 
  
                    </div>
                </div>
            </div>

            <!-- Puerta verja -->
            <div class="puerta">
                <div class="abrir_puerta">
                    <button type="button" class="boton"  id="paso" onclick="puerta(2)">Puerta paso</button>
                    <button type="button" class="boton"  id="vehiculos" onclick="puerta(1)">Puerta vehiculos</button>
                </div>
                <div class="cerrar">
                    <button type="button" class="boton"  id="cierro" onclick="puerta(3)">Cerrar</button>
                </div>

                <div class="foco">
                    <h5>Foco puerta</h5>

                <div class="botones_foco">
                    <button type="button" class="boton" id="foco_on" onclick="foco(1)">On</button>
                    <button type="button" class="boton" id="foco_off" onclick="foco(0)">Off</button>
                </div>
            </div>

            <!-- Mando del taller -->
            <div class="mando">
                <div class="inversor">
                    <h5>Inversor</h5>
                    <div class="botones_inversor">
                        <button type="button" class="boton " id="inversor_on" onclick="inversor(1)">On</button>
                        <button type="button" class="boton " id="inversor_on" onclick="inversor(0)">On</button>
                    </div>
                </div>

                <div class="termo">
                    <h5>Termo</h5>
                    <div class="botones_termo">
                        <button type="button" class="boton " id="termo_on" onclick="termo(1)">On</button>
                        <button type="button" class="boton " id="termo_off" onclick="termo(0)">Off</button>
                    </div>
                </div>
            </div>

            <!-- Motor -->
            <div class="motor">
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
                    <button class="boton" id="btn_motor" type="button" onclick="motor()"></button>
                </div>
                <div class="contenedor_contadores">
                    <h5>Contadores</h5>
                    <div class="contadores">
                        <div class="totalHoras">
                            <h5>Total</h5>
                            <div id="total_horas" class="total"></div>
                        </div>
                        <div class="totalMes">
                            <h5>Horas mes</h5>
                            <div id="total_mes" class="mes"></div>
                        </div>
                        <div class="totalAhora">
                            <h5>Ahora</h5>
                            <div id="total_ahora" class="ahora"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- iluminacion -->
            <div class="ilu">
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
                    <button id="btn_on"   type="button" onclick="ilu_envio(1)" class="boton">On</button>
                    <button id="btn_auto" type="button" onclick="ilu_envio(2)" class="boton">Auto</button>
                    <button id="btn_off"  type="button" onclick="ilu_envio(0)" class="boton">Off</button>
                </div>
            </div>


            <!-- Meteo -->
            <?php include_once __DIR__ . "/meteo.php";  ?>

        </div>



        <?php $script = '<script src="/build/js/jquery-3-7-1.js"></script>'; ?>
        <?php $script .= '<script type="module" src="/build/js/script.js"></script>'; ?>
        <?php $script .= '<script src="/build/js/agua.js"></script>'; ?>
        <?php $script .= '<script src="/build/js/gasoil.js"></script>'; ?>
        <?php $script .= '<script src="/build/js/tension24V.js"></script>'; ?>
        <?php $script .= '<script src="/build/js/tension48V.js"></script>'; ?>
        <?php $script .= '<script src="/build/js/clima.js"></script>'; ?>
        <?php $script .= '<script src="/build/js/relog.js"></script>'; ?>
        <?php $script .= '<script src="/build/js/mqtt.js"></script>'; ?>