///////////////////////////////
// Index.js de node
///////////////////////////////

const mqtt = require("mqtt");
const moment = require('moment');

const conexionDB = require('./conexionDB');
const conexion = conexionDB();


var suma0;
var suma1;
var suma2;
var te;
var te_in;
var hu;
var hu_su;
var uv;
var wa;


// Broker
  // Credenciales
    var option = {
      clientId: 'homerosa_node_vigi',
      username: 'homerosa_domo_v6',
      password: 'homerosa_domo_mar120314mar@',
      keepalive: 15,
      reconnectPerid: 1000,
      protocolId: 'MQIsdp',
      protocolVersion: 3,
      clean: true,
      encoding: 'utf8'
    };

    // Conexion
    var client = mqtt.connect('mqtt://sistemar.es:1883', option);
          
      client.on("connect", () => {
        client.subscribe('domo/Sensores/#', (err) => {

          if (!err) {
            console.log("Conexion realizada al broker");
          } else {
            console.log(err);
          }

        });
      });   


    client.on('message', function(topic, message){
       // Para insertar datos en la base de datos
        if (topic == "domo/Sensores/puerta"){
            let msg = message.toString();
            let divide = msg.split(",");
            hu_su = divide[0];
            suma0 = 1;
            console.log("llego de puerta");
            guardar_datos();
        }

        if (topic == "domo/Sensores/salon"){
          let msg = message.toString();
            let divide = msg.split(",");
            te = divide[0];
            hu = divide[1];
            te_in = divide[2];
            suma1 = 1;
            console.log("llego de salon");
            guardar_datos();
            
        }

        if (topic == "domo/Sensores/piscina"){
          let msg = message.toString();
            let divide = msg.split(",");
            wa = divide[0];
            uv = divide[1];
            suma2 = 1;
            console.log("llego de piscina");
            guardar_datos();
        }


      });


      function guardar_datos(){
          let h =  moment().format('H');
          let d =  moment().format('D');
          let m =  moment().format('M');
          let y =  moment().format('YYYY');
        
        if(suma0 + suma1 + suma2 == 3){
          
          console.log(" Se activa la funcion de envio");
          var inserta = "INSERT INTO `medidas`(`h`,`d`,`m`,`y`,`te`,`te_in`,`hu`,`hu_su`, `uv`, `wa`) VALUES ("+h+","+d+","+m+","+y+","+te+","+te_in+","+hu+", "+hu_su+", "+uv+", "+wa+");";
          conexion.query(inserta);
            
            suma0 = 0; 
            suma1 = 0; 
            suma2 = 0; 
        }
      }