
// Relog
document.addEventListener("DOMContentLoaded", function(event) {
  muestraRelog();
});

  // RELOJ
setInterval(muestraRelog,1000);
  
  function muestraRelog() {
    mydate = new Date();
    let hora = mydate.getHours();
    let minutos = mydate.getMinutes();
    let segundos = mydate.getSeconds();
    let day = mydate.getDate();
    let month = mydate.getMonth()+1;
    let year = mydate.getFullYear()
  
    if(hora < 10) { hora = '0' + hora; }
    if(minutos < 10) { minutos = '0' + minutos; }
    if(segundos < 10) { segundos = '0' + segundos; }

    if (year < 1000) { year += 1900; }
    if (month < 10) { month = "0" + month; }
    if (day < 10) { day = "0" + day; }

    document.getElementById("hora").innerHTML = hora+':'+minutos+':'+segundos;
    document.getElementById("fecha").innerHTML = day+"/"+month+"/"+year;
  }