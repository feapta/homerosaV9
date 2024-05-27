

    <button type="button" class="boton_verde"> 
        <img class="img" src="/build/img/pisci.png" alt="">
        <h4>Control piscina</h4>
    </button>

    <div class="desple">
        <div class="contenedor_piscina">

            <div class="contenedor_info">
                <div class="conte_izquierda">
                    <div class="conte_img">
                        <img  class="img_piscina" src="/build/img/piscina.png" alt="">
                    </div>
                    <div class="conte_h5">
                        <h5 class="marcha ocultar">Marcha</h5>
                        <h5 class="parada">Parada</h5>
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
                        <p class="encendido_piscina">12:34</p>
                        
                        <h5>Apagado</h5>
                        <p class="apagado_piscina">12:34</p>
                    </div>

                    <div class="conte_boton">
                        <input class="nuevo_horario_piscina" type="button" value="Enviar">
                    </div>
                </div>

                <div class="conte_derecha">
                    <div class="nuevo_horario_piscina">
                        <h5 class="titulo_horas">Nuevo horario</h5>
                        
                        <hr>
                        
                        <h5>Encendido</h5>
                        <input type="time" class="inicio_p" placeholder="00:00">
                        
                        <h5>Apagado</h5>
                        <input type="time" class="final_p" placeholder="00:00">
                    </div>
                </div>
            </div>

            <div class="contenedor_botones">
                <button class="btn_pulsado on_piscina" type="button" onclick="envio_boton_piscina(1)">On</button>
                <button class="btn_pulsado auto_piscina" type="button" onclick="envio_boton_piscina(2)">Auto</button>
                <button class="btn_pulsado off_piscina" type="button" onclick="envio_boton_piscina(0)">Off</button>
            </div>
        </div>
    </div>