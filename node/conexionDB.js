const mysql = require('mysql');


module.exports = () => {
  return mysql.createConnection({
        host: "localhost",
        user: "homerosa",
        password: "homerosa120314",
        database: "admin_domoV9"
  });
}