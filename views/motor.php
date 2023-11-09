

    <button type="button" class="boton_verde"> 
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
                <button class="btn_pulsado" id="btn_motor" type="button" onclick="motor()"></button>
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