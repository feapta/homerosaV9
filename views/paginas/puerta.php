

    <button type="button" class="boton_verde">
        <img class="img" src="/build/img/puertas.png" alt=""> 
        <h4>Puertas</h4>
    </button>

    <div class="desple">
        <div class="contenedor_puerta">
            <div class="abrir_puerta">
                <button type="button" class="btn_pulsado"  id="paso" onclick="puerta(2)">Puerta paso</button>
                <button type="button" class="btn_pulsado"  id="vehiculos" onclick="puerta(1)">Puerta vehiculos</button>
            </div>
            <div class="cerrar_puerta">
                <button type="button" class="btn_pulsado"  id="cierro" onclick="puerta(3)">Cerrar</button>
            </div>

            <div class="foco">
                <h5>Foco puerta</h5>

                <div class="botones_foco">
                    <button type="button" class="btn_pulsado" id="foco_on" onclick="foco(1)">On</button>
                    <button type="button" class="btn_pulsado" id="foco_off" onclick="foco(0)">Off</button>
                </div>
            </div>
        </div>
    </div>