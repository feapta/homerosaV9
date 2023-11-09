

<button type="button" class="boton_verde"> 
                <img class="img" src="/build/img/ilu.png" alt="">
                <h4>Iluminación</h4>
            </button>

            <div class="desple">
                <div class="contenedor_ilu">

                    <div class="contenedor_info">
                        <div class="conte_izquierda">
                            
                            <img  id="bombilla" src="/build/img/bombilla.jpg" alt="">

                            <div class="lumenes">
                                <h5>Lumenes</h5>
                                <div class="conte_lux">
                                    <p id="lux"></p>
                                    <p>Lux</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="conte_centro">
                            <div class="horas_placa">
                                <h5 class="titulo_horas">Horas</h5>
                                
                                <hr>
                                
                                <h5>Encendido</h5>
                                <p class="anochecer"></p>
                                
                                <h5>Apagado</h5>
                                <p class="amanecer"></p>
                            </div>

                            <div class="horas_informacion">
                                <div class="conte_anochecer_info">
                                    <p>Anochece: </p>
                                    <p class="anochecer_info"></p>
                                </div>

                                <div class="conte_amanecer_info">
                                    <p>Amanece:</p>
                                    <p class="amanecer_info"></p>
                                </div>
                            </div>
                        </div>

                        <div class="conte_derecha">
                            <div class="nuevas_horas">
                                <h5 class="titulo_horas">Nueva hora</h5>
                                
                                <hr>
                                
                                <h5>Encendido</h5>
                                <input type="time" class="nuevo_anochecer" placeholder="00:00">
                                
                                <h5>Apagado</h5>
                                <input type="time" class="nuevo_amanecer" placeholder="00:00">
                            </div>

                            <div class="conte_boton">
                                <input class="guardar_nueva_hora" type="button" value="Enviar">
                            </div>
                        </div>
                    </div>

                    <div class="contenedor_botones">
                        <button id="btn_on"   class="btn_pulsado" type="button" onclick="ilu_envio(1)">On</button>
                        <button id="btn_auto" class="btn_pulsado" type="button" onclick="ilu_envio(2)">Auto</button>
                        <button id="btn_off"  class="btn_pulsado" type="button" onclick="ilu_envio(0)">Off</button>
                    </div>
                </div>
            </div>