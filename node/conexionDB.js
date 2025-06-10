const mysql = require('mysql');


module.exports = () => {
  return mysql.createConnection({
    host: "sistemar.es",
    user: "admin_sistemar",
    password: "sistemar120314mar",
    database: "admin_sistemar"
  });
}
