/*  NOTAS /////////////////////////////////////////////////
const date = new Date();
//YYYY-MM-DD format
const mysqlDate = date.toISOString().split("T")[0];
*/

var mysql = require('mysql');
var mqtt = require('mqtt');
const moment = require('moment');

  // Credenciales para conectar a la base de datos
  var conexion = mysql.createConnection({
    host: "localhost",
    user: "homerosa",
    password: "homerosa120314",
    database: "admin_domoV9"
  });

  // Credenciales para conectar al broker mqtt
  var options = {
    //clientId:'Sistemar_node_js_' + Math.round(Math.random() * (0- 10000) * -1),
    clientId: 'homerosa_Sensores',
    username: 'homerosa_domo_v6',
    password: 'homerosa_domo_mar120314mar@',
    keepalive: 60,
    reconnectPerid: 5000,
    protocolId: 'MQIsdp',
    protocolVersion: 3,
    clean: true,
    encoding: 'utf8'
  };


  //  Conexion a la base de datos
  conexion.connect(function(err){
      if(err) throw err;
      console.log ("Conexion realizad correctamente a la base de datos");
      });


  // Conexion al broker
  var client = mqtt.connect("wss://sistemar.es:8084/mqtt", options);

  // Una vez conectados nos subscribimos al topico
  client.on('connect', function(){
          client.subscribe('domo/Sensores/#', function(err){
      // console.log ("Subcripcion realizada con exito al topico")
    });
  });

  // Por donde se reciben los mensajes
    client.on('message', function(topic, message){
      //console.log ("Mensaje recibido desde ->" + topic + "Mensaje ->" + message.toString());
      let h =  moment().format('H');
      var d =  moment().format('D');
      var m =  moment().format('M');
      var y =  moment().format('YYYY');

        if (topic == "sensores/A"){
          var msg = message.toString();
          var dividir = msg.split(",");
            var sensor1 = dividir[0];
            var sensor2 = dividir[1];
            var temp = dividir[2];
            var hume = dividir[3];

          var query = "INSERT INTO `medidas`(`h`,`d`,`m`,`y`,`te`,`te_in`,`hu`,`hu_su`, `uv`, `wa`, `fecha`) VALUES ("+h+","+d+","+m+","+y+","+te+","+te_in+","+hu+","+hu_su+","+uv+","+wa+", CURRENT_DATE);";
          console.log("datos enviados");

          conexion.query(query, function (err, result, fields) {
            if(err) throw err;
          });
        }
});

  // PARA MANTENER LA CONEXION CON LA BASE DE DATOS ABIERTA SIEMPRE
  setInterval(function (){
      var query = 'SELECT 1 + 1 as result';
      conexion.query(query, function (err, result, fields) {
          if(err) throw err;
        });
  }, 5000);
