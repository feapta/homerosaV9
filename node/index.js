///////////////////////////////
// Index.js de node
///////////////////////////////

const mysql = require('mysql');
const mqtt = require("mqtt");
const moment = require('moment');

// Base de datos
  // Credenciales
    var conexion = mysql.createConnection({
      host: "localhost",
      user: "homerosa",
      password: "homerosa120314",
      database: "admin_domoV9"
    });  
        

// Broker
  // Credenciales
    var option = {
      clientId: 'homerosa_web-nueva',
      username: 'homerosa_domo_v6',
      password: 'homerosa_domo_mar120314mar@',
      keepalive: 60,
      reconnectPerid: 5000,
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
        }

        if (topic == "domo/Sensores/salon"){
          let msg = message.toString();
            let divide = msg.split(",");
            te = divide[0];
            te_in = divide[1];
            hu = divide[2];
            suma1 = 1;
            
        }

        if (topic == "domo/Sensores/piscina"){
          let msg = message.toString();
            let divide = msg.split(",");
            uv = divide[0];
            wa = divide[1];
            suma2 = 1;
        }

        if(suma0 + suma1 + suma2 == 3){
          suma0 = 0; 
          suma1 = 0; 
          suma2 = 0; 
         
          guardar_datos();
          console.log(" Se activa la funcion de envio");
    
        }

        if(suma0 == 1){
          suma0 = 0; 
          suma1 = 0; 
          suma2 = 0; 
         guardar_datos();
          console.log(" Se activa la funcion de envio");
    
        }
      });



      function guardar_datos(){
          let h =  moment().format('H');
          let d =  moment().format('D');
          let m =  moment().format('M');
          let y =  moment().format('YYYY');
      
        var inserta = "INSERT INTO `medidas`(`h`,`d`,`m`,`y`,`te`,`te_in`,`hu`,`hu_su`, uv`, `w`, `fecha`) VALUES ("+h+","+d+","+m+","+y+","+te+","+te_in+","+hu+", "+hu_su+", "+uv+", "+wa+", "+fecha+");";
              
        // Conexion base de datos
        conexion.connect(function(err){
          if(err) throw err;
            console.log ("Conexion realizada correctamente a la base de datos");
            conexion.query(inserta);
            conexion.end();
          }); 
      }