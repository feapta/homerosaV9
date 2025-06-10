const mysql = require('mysql');


module.exports = () => {
  return mysql.createConnection({
    host: "homerosa.es",
    user: "homerosa",
    password: "homerosa120314",
    database: "admin_domoV9"
  });
}
