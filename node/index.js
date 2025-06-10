const mqtt = require('mqtt');
const conexionDB = require('./conexionDB');
const conexion = conexionDB();
const moment = require('moment');


var te;
var te_in;
var hu;
var hu_su;
var uv;
var wa;
var suma0;
var suma1;
var suma2;


// Credenciales para conectar al broker mqtt
  var options = {
    port: 1883,
    host: 'homerasa.es',
    clientId:'node_medidas' + Math.round(Math.random() * (0- 10000) * -1),
    username: 'homerosa_domo_v6',
    password: 'homerosa_domo_mar120314mar@',
    keepalive: 60,
    reconnectPerid: 5000,
    protocolId: 'MQIsdp',
    protocolVersion: 3,
    clean: true,
    encoding: 'utf8'
  };

// Conexion al broker
    var client = mqtt.connect("mqtt://homerosa.es", options);

// Una vez conectados nos subscribimos al topico
  client.on('connect', function(){
     console.log("conectado al broker")
      client.subscribe('domo/Sensores/#', function(err){
      console.log ("Subcripcion realizada con exito al topico")
    });
});

// Por donde se reciben los mensajes
  client.on('message', function(topic, message){
    
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
  
}); 

if(suma0 + suma1 + suma2 == 3){
  suma0 = 0; 
  suma1 = 0; 
  suma2 = 0; 
  insertar_datos();

}


function insertar_datos(){
        let ho =  moment().format('H');
        let d =  moment().format('DD');
        let m =  moment().format('MM');
        let y =  moment().format('YYYY');
          
        var inserta = "INSERT INTO `sensores`(`h`,`d`,`m`,`y`,`te`,`te_in`,`hu`,`hu_su`, `uv`, `wa`, `ho`) VALUES ("+h+","+d+","+m+","+y+","+te+","+te_in+","+hu+","+hu_su+","+uv+","+wa+","+ho+");";
        conexion.query(inserta);
        console.log("Datos insertados en la tabla sensores")
}