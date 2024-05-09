
    <button type="button" class="boton_verde">
        <img class="img" src="/build/img/mando.png" alt="">
        <h4>Termo</h4>
    </button>
    <div class="desple">
        <div class="contenedor_termo">
            <div class="termo1">
                <div class="superior">
                    <div class="conte_izquierda">
                        <div class="conte_img">
                            <img  class="img_termo" src="/build/img/termo.jpg" alt="">
                        </div>
                        <div class="titulo_termo"> 
                            <h5>Termo 1</h5>
                        </div>envio_boton_termo1
                        <div class="conte_h5">
                            <h5 class="marcha_termo ocultar">Marcha</h5>
                            <h5 class="parada_termo">Parada</h5>
                        </div>
                        <div class="conte_relog">
                            <p class="hora"></p>
                        </div>
                    </div>
                    
                    <!-- Control por horario -->
                    <div class="conte_centro">
                        <div class="horas_placa_piscina">
                            <h5 class="titulo_horas">Horario</h5>
                            
                            <hr>

                            <h5>Encendido</h5>
                            <p class="encendido_termo1">12:34</p>
                            
                            <h5>Apagado</h5>
                            <p class="apagado_termo1">12:34</p>
                        </div>

                        <div class="conte_boton">
                            <input class="nuevo_horario_termo1" type="button" value="Enviar">
                        </div>
                    </div>

                    <div class="conte_derecha">
                        <div class="nuevo_horario_piscina">
                            <h5 class="titulo_horas">Nueva horario</h5>
                            
                            <hr>
                            
                            <h5>Encendido</h5>
                            <input type="time" class="inicio" placeholder="00:00">
                            
                            <h5>Apagado</h5>
                            <input type="time" class="final" placeholder="00:00">
                        </div>
                    </div>
                </div>
               
                <div class="botones_termo">
                    <button type="button" class="btn_pulsado pulsacion termo1_on" id="termo1_on" onclick="envio_boton_termo1(1)">On</button>
                    <button type="button" class="btn_pulsado pulsacion termo1_auto" id="termo1_auto" onclick="envio_boton_termo1(2)">Auto</button>
                    <button type="button" class="btn_pulsado pulsacion termo1_off" id="termo1_off" onclick="envio_boton_termo1(0)">Off</button>
                </div>
            </div>
            
            <div class="termo3">
                <div class="superior">
                    <h5>Termo 3</h5>
                    <div class="conte_img">
                        <img  class="img_termo" src="/build/img/termo.jpg" alt="">
                    </div>
                    <div class="conte_h5">
                        <h4 class="marcha_termo ocultar">On</h4>
                        <h4 class="parada_termo">Off</h4>
                    </div>
                </div>
               
                <div class="botones_termo">
                    <button type="button" class="btn_pulsado pulsacion termo3_on" id="termo3_on" onclick="termo3(1)">On</button>
                    <button type="button" class="btn_pulsado pulsacion termo3_auto" id="termo3_auto" onclick="termo3(2)">Auto</button>
                    <button type="button" class="btn_pulsado pulsacion termo3_off" id="termo3_off" onclick="termo3(0)">Off</button>
                </div>
            </div>
        </div>
    </div>