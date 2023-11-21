
var Bat24;
var motor_est;
var n = 0;


    // Datos de conexion al broker
    const options = {
      clean: true, 
      connectTimeout: 4000,
      clientId: 'homerosa_web-nueva',
      username: 'homerosa_domo_v6',
      password: 'homerosa_domo_mar120314mar@',
      keepalive: 60,
    }

    const client = mqtt.connect('wss://sistemar.es:8084/mqtt', options);
        
    client.on("connect", () => {
      client.subscribe('domo/#', (err) => {
        if (!err) {
         publicar();
        }
      });
    });

    // Recepcion de mensajes  ============================
    client.on('message', function(topic, message){

        // DESDE ESP DEL SALON
        // Medidas
        if (topic == "domo/Salon/medidas") {
            let msg_gen = message.toString();
            let dividir = msg_gen.split(",");

            document.querySelector(".temp_exte").innerHTML = dividir[0];
            document.querySelector(".hume_aire").innerHTML = dividir[1];
            console.log("IP casa -> " + dividir[2]);
            document.getElementById("lux").innerHTML = dividir[3];
            document.getElementById("watios").innerHTML = dividir[4];
            document.querySelector(".temp_inte").innerHTML = dividir[5];
        }

        // Iluminacion
        if(topic == "domo/Salon/ilu/estado"){
            let msg = message.toString();
            let divide = msg.split(',');
            let estadoilu = divide[0];
            let posicionbotonilu = divide[1];
            let h_ilu = divide[2];
            let ho_ilu = divide[3];

            // Estado
            if (estadoilu == "1") { // on
              document.getElementById('bombilla').classList.add('animacion');
            }
            if (estadoilu == "0") { // off
              document.getElementById('bombilla').classList.remove('animacion');
            }

            // Posicion boton iluminacion
            if (posicionbotonilu == "1") { // on
                document.querySelector(".on").classList.add("activo");
                document.querySelector('.auto').classList.remove("activo");
                document.querySelector('.off').classList.remove("activo");
            }
            if (posicionbotonilu == "2") { // auto
                document.querySelector(".auto").classList.add("activo");
                document.querySelector('.on').classList.remove("activo");
                document.querySelector('.off').classList.remove("activo");
            }
            if (posicionbotonilu == "0") { // off
                document.querySelector(".off").classList.add("activo");
                document.querySelector('.auto').classList.remove("activo");
                document.querySelector('.on').classList.remove("activo");
            }

            // Horarios cargados en la placa
            let punto_ilu = h_ilu.split(':');
            hora_on_ilu = punto_ilu[0];
            minu_on_ilu = punto_ilu[1];

            if( hora_on_ilu < 10 ) { hora_on_ilu = '0' + hora_on_ilu; }
            if( minu_on_ilu < 10 ) { minu_on_ilu = '0' + minu_on_ilu; }
            let horadeencendido_ilu = (hora_on_ilu + ":" + minu_on_ilu);

            let puntos_ilu = ho_ilu.split(':');
            hora_off_ilu = puntos_ilu[0];
            minu_off_ilu = puntos_ilu[1];

            if( hora_off_ilu < 10 ) { hora_off_ilu = '0' + hora_off_ilu; }
            if( minu_off_ilu < 10 ) { minu_off_ilu = '0' + minu_off_ilu; }
            let horadeapagado_ilu = (hora_off_ilu + ":" + minu_off_ilu);
            
            document.querySelector('.anochecer_placa').innerHTML = horadeencendido_ilu;
            document.querySelector('.amanecer_placa').innerHTML = horadeapagado_ilu;
        }


        // DESDE ESP DE LA PUERTA DE LA VERJA
        // Estados
        if(topic == "domo/Puerta/general"){
            let msg_cons = message.toString();
            let divide = msg_cons.split(",");

            console.log("IP Puerta verja -> " + divide[0]);

            let puerta_paso = divide[1];
            let puerta_vehiculos = divide[2];

            document.querySelector('.hume_suelo').innerHTML = divide[3];

            // Puerta de vehiculos
            if(puerta_vehiculos == 0){
              document.getElementById('vehiculos').style = "background-color: red ";
            }
            // Puerta de paso
            if(puerta_paso == 0){
              document.getElementById('paso').style = "background-color: red ";
            }
            // Boton cierra puertas
            if(puerta_vehiculos == 1){
              document.getElementById('cierro').style = "border: solid 1px red ";
            }
        }

        if(topic == "domo/Puerta/estado"){
            let msg_pta = message.toString();

            if(msg_pta == "0"){
              document.getElementById('cierro').style = "border: solid 1px red;"
              document.getElementById('paso').style = "background: #00bcd4;"
              document.getElementById('vehiculos').style = "background: #00bcd4;"
            }
            if(msg_pta == "1"){
              document.getElementById('paso').style = "background: red;";
              console.log("Puerta paso abierta");
            }
            if(msg_pta == "2"){
              document.getElementById('vehiculos').style = "background: red; ";
              console.log("Puertas vehiculos abiertas");
            }
        }


        // DESDE ESP DEL TALLER
        // Medidas
        if (topic == "domo/Taller/medidas") {
            let msg_gen = message.toString();
            let dividir = msg_gen.split(",");
            let bateria24 = dividir[0];
            let nivelagua = dividir[1];
            let iptaller = dividir[2];
            let bateria48 = dividir[3];
            let consumo24 = dividir[4];

            Bat24 = document.querySelector('.Bat24_card').innerHTML = bateria24;
            if (Bat24) {
              batCard24v(Bat24);
            } else {
              document.querySelector('.img_24').src = "/build/img/baterias/vacia.png";
            }

            document.getElementById("agua").innerHTML = nivelagua;
            let agua = dividir[1];

            console.log("IP Taller -> " + iptaller);

            let agua_calculada = agua/100;
            $('#barra-agua').width(agua_calculada + "%").attr('aria-valuenow', agua_calculada);
            nivel_agua(agua);
              
            let Bat48 = document.querySelector('.Bat48_card').innerHTML = bateria48;
            if (Bat48) {
              batCard48v(Bat48);
            } else {
              document.querySelector('.img_24').src = "/build/img/baterias/vacia.png";
            }

            console.log(consumo24);
        }

        // Datos del motor
        if (topic == "domo/Taller/motor/estado") {
            let msg_mto = message.toString();
            let dividir = msg_mto.split(",");

              let estado = dividir[0]
              let seg_total_horas = dividir[1];
              let seg_total_mes  = dividir[2];
              let seg_ahora = dividir[3];
              let gasoil = dividir[4];


              if (motor_est == 1){n = 1;}

              // Estado
              if (estado == "1") {
                document.getElementById("btn_motor").innerHTML = "Marcha";
                document.getElementById("btn_motor").style = "background-color: #ce2222";
                document.getElementById('img_motor').className ='animacion';
              }
              if (estado == "0") {
                document.getElementById("btn_motor").innerHTML = "Parado";
                document.getElementById('img_motor').className ='';
            }


            // CONTADORES
            // Total horas
                var hourH = Math.floor(seg_total_horas  / 3600);
                hourH = (hourH < 10)? '0' + hourH: hourH;

                var minuteH = Math.floor((seg_total_horas  / 60) % 60);
                    minuteH = (minuteH < 10)? '0' + minuteH : minuteH;

                var secondH = seg_total_horas  % 60;
                    secondH = (secondH < 10)? '0' + secondH : secondH;

                document.getElementById("total_horas").innerHTML =  hourH+ ":" +minuteH+ ":" +secondH; 

            // Total mes
                var hour = Math.floor(seg_total_mes / 3600);
                    hour = (hour < 10)? '0' + hour : hour;

                var minute = Math.floor((seg_total_mes / 60) % 60);
                    minute = (minute < 10)? '0' + minute : minute;

                var second = seg_total_mes % 60;
                    second = (second < 10)? '0' + second : second;

                document.getElementById("total_mes").innerHTML = hour+ ":" +minute+ ":" +second;

            // Total ahora
                var hourS = Math.floor(seg_ahora / 3600);
                    hourS = (hourS < 10)? '0' + hourS : hourS;

                var minuteS = Math.floor((seg_ahora / 60) % 60);
                    minuteS = (minuteS < 10)? '0' + minuteS : minuteS;

                var secondS = seg_ahora % 60;
                    secondS = (secondS < 10)? '0' + secondS : secondS;

                document.getElementById("total_ahora").innerHTML = hourS + ':' + minuteS + ':' + secondS;

              document.getElementById("litros_gasoil").innerHTML = dividir[4];
                  
            nivel_Gasoil(gasoil);
        }

        // Estado del rele del inversor
        if (topic == "domo/Taller/inversor") {
            let inver = message.toString();

            if(inver == '1'){ 
              document.getElementById('inversor_on').style.backgroundColor = 'red';
            } else { 
              document.getElementById('inversor_on').style.backgroundColor = '#00e676';
            }
            if(inver == '0'){ 
              document.getElementById('inversor_on').style.backgroundColor = '#00e676';
            }
        }

        // Estado del rele termo
        if(topic == "domo/Taller/termo") {
            let termo = message.toString();

            if(termo == '1'){ 
              document.getElementById('termo_on').style.backgroundColor = 'red';
            } else { 
              document.getElementById('termo_on').style.backgroundColor = '#00e676';
            }
            if(termo == '0' ){ 
              document.getElementById('termo_on').style.backgroundColor = '#00e676';
            }
        }
        
        // Estado del rele piscina
        if(topic == "domo/Taller/piscina/estados") {
            let msg= message.toString();
            let divide = msg.split(",");
            
            let estadopiscina = divide[0];
            let posicionboton = divide[1];
            let h = divide[2];
            let ho = divide[3];

            console.log(divide);

            // Estado de la piscina
            if (estadopiscina == "1") { // on
              document.querySelector('.img_piscina').classList.add('animacion');
              document.querySelector('.marcha').classList.remove('ocultar')
              document.querySelector('.parada').classList.add('ocultar')
            }
            if (estadopiscina == "0") { // off
              document.querySelector('.img_piscina').classList.remove('animacion');
              document.querySelector('.marcha').classList.add('ocultar')
              document.querySelector('.parada').classList.remove('ocultar')
            }

            // Posicion del boton
            if (posicionboton == "1") { // on
              document.querySelector(".on_piscina").classList.add("activo");
              document.querySelector('.auto_piscina').classList.remove("activo");
              document.querySelector('.off_piscina').classList.remove("activo");
            }
            if (posicionboton == "2") { // auto
                document.querySelector(".auto_piscina").classList.add("activo");
                document.querySelector('.on_piscina').classList.remove("activo");
                document.querySelector('.off_piscina').classList.remove("activo");
            }
            if (posicionboton == "0") { // off
                document.querySelector(".off_piscina").classList.add("activo");
                document.querySelector('.auto_piscina').classList.remove("activo");
                document.querySelector('.on_piscina').classList.remove("activo");
            }

            // Horarios cargados en la placa
            let punto = h.split(':');
            hora_on = punto[0];
            minu_on = punto[1];

            if( hora_on < 10 ) { hora_on = '0' + hora_on; }
            if( minu_on < 10 ) { minu_on = '0' + minu_on; }
            let horadeencendido = (hora_on + ":" + minu_on);

            let puntos = ho.split(':');
            hora_off = puntos[0];
            minu_off = puntos[1];

            if( hora_off < 10 ) { hora_off = '0' + hora_off; }
            if( minu_off < 10 ) { minu_off = '0' + minu_off; }
            let horadeapagado = (hora_off + ":" + minu_off);

            document.querySelector('.encendido_piscina').innerHTML = horadeencendido;
            document.querySelector('.apagado_piscina').innerHTML = horadeapagado;

        }
    });

 

// Publicaciones ===========================================================0
    // Actualiza los datos cada 10 segundos
    setInterval(informacion,10000);
    
    function informacion(){
      publicar();
    }

    function publicar() {
      client.publish('domo/Salon/peticion', 'hola');
      client.publish('domo/Taller/recibe/peticion', 'hola');
      client.publish('domo/Puerta/peticion', 'hola'); 
  
    }

    // foco puerta
    function foco(n){
        let msg_foco = n.toString();
        client.publish('domo/Puerta/foco', msg_foco, function(err){
          console.log(msg_foco);
          })
        if(msg_foco == 1){ document.getElementById('foco_on').style = "background-color: red"} else { document.getElementById('foco_on').style = "background-color: #00bcd4;"}
        if(msg_foco == 0){ document.getElementById('foco_on').style = "background-color: #00bcd4;" }
    }

    // Inversor
    function inversor(inv){
        let msg_inversor = inv.toString();
        client.publish('domo/Taller/recibe/inversor/ordenes', msg_inversor);
    }

    // Rele de reserva
    function termo(ter){
        let msg_termo = ter.toString();
        client.publish('domo/Taller/recibe/termo/ordenes', msg_termo);
    }

    // Abrir y cerrar puertas
    function puerta(p){
        let msg_puerta = p.toString();
        client.publish('domo/Salon/puerta', msg_puerta);
    }

    // Arranque y parada del motor
    function motor(){
        n++;
        let msg;
        if(n == 1){
          msg = '1';
        }
        if(n == 2){
          n = 0;
          msg = '0';
        }

        document.getElementById("btn_motor").style = "background-color: #f3e5f5";
        client.publish('domo/Salon/motor/ordenes', msg);
    }

    // Iluminacion
    function ilu_envio(n){
        let msg_ilu = n.toString();
        client.publish('domo/Salon/ilu/ordenes', msg_ilu);
    }


