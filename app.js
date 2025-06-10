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

      
    // Inserta datos en la base de datos de sensores
    function insertar_datos(){
        conexion.connect(function(err){
        if(err) throw err;
          console.log ("Conexion realizad correctamente a la base de datos");
        });

            let h =  moment().format('H');
            let d =  moment().format('D');
            let m =  moment().format('M');
            let y =  moment().format('YYYY');
              
            var inserta = "INSERT INTO `sensores`(`h`,`d`,`m`,`y`,`te`,`te_in`,`hu`,`hu_su`, `uv`, `wa`) VALUES ("+h+","+d+","+m+","+y+","+te+","+te_in+","+hu+","+hu_su+","+uv+","+wa+");";
            conexion.query(inserta);
            console.log("Datos insertados en la tabla sensores")
            connection.end();
    }

