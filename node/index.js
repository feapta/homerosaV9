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
    var options = {
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
    const client = mqtt.connect('mqtt://sistemar.es:1883', options);
          
      client.on("connect", () => {
        client.subscribe('domo/Sensores/#', (err) => {

          if (!err) {
            console.log("Conexion realizada al broker");
          } else {
            console.log(err);
          }

        });
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