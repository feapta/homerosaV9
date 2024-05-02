
    <button type="button" class="boton_verde">
        <img class="img" src="/build/img/mando.png" alt="">
        <h4>Mando</h4>
    </button>
    <div class="desple">
        <div class="contenedor_mando">
            <div class="inversor">
                <div class="superior">
                    <h5>Inversor</h5>
                    <div class="conte_img">
                        <img  class="img_inver" src="/build/img/inversor.png" alt="">
                    </div>
                    <div class="conte_h5">
                        <h5 class="marcha_inver ocultar">On</h5>
                        <h5 class="parada_inver">Off</h5>
                    </div>
                    </div>
                    
                    <div class="botones_inversor">
                        <button type="button" class="btn_pulsado pulsacion inver_on" id="inversor_on" onclick="inversor(1)">On</button>
                        <button type="button" class="btn_pulsado pulsacion inver_auto" id="inversor_auto" onclick="inversor(2)">Auto</button>
                        <button type="button" class="btn_pulsado pulsacion inver_off" id="inversor_off" onclick="inversor(0)">Off</button>
                    </div>
            </div>
            
            <div class="termo">
                <div class="superior">
                    <h5>Termo</h5>
                    <div class="conte_img">
                        <img  class="img_termo" src="/build/img/termo.jpg" alt="">
                    </div>
                    <div class="conte_h5">
                        <h5 class="marcha_termo ocultar">On</h5>
                        <h5 class="parada_termo">Off</h5>
                    </div>
                </div>
               
                <div class="botones_termo">
                    <button type="button" class="btn_pulsado pulsacion termo_on" id="termo_on" onclick="termo(1)">On</button>
                    <button type="button" class="btn_pulsado pulsacion termo_auto" id="termo_auto" onclick="termo(2)">Auto</button>
                    <button type="button" class="btn_pulsado pulsacion termo_off" id="termo_off" onclick="termo(0)">Off</button>
                </div>
            </div>
        </div>
    </div>