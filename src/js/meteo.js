  // Clima

  var segundos_anochecer;
  var segundos_amanecer;
  const key = 'a1afadd13ed6fe6311222c1e6b003ad1';

  $( document ).ready(function() {
    my = new Date();
    getWeather();
    getWeatherdia();
    polucion();

    const btn_leyenda = document.querySelector('.btn-leyenda');
        btn_leyenda.addEventListener('click', abreleyenda);

  });


  async function getWeather() {
    const URI = `https://api.openweathermap.org/data/2.5/weather?lat=39.16&lon=-3.84&appid=${key}&units=metric&lang=sp`;
    const response = await fetch(URI);
    const data = await response.json();

    var weatherIcon = {
      "01d": "/build/img/clima/01d.png",         // Soleado claros
      "01n": "/build/img/clima/01n.png",         // Noche clara
      "02d": "/build/img/clima/02d.png",         // Algunas nubes dia
      "02n": "/build/img/clima/02n.png",         // Algunas nubes noche
      "03d": "/build/img/clima/03d.png",         // Nubes dispersas dia          *
      "03n": "/build/img/clima/03n.png",         // Nubes dispersas noche        *
      "04d": "/build/img/clima/04d.png",         // Nubes rotas dia
      "04n": "/build/img/clima/04n.png",         // Nubes rotas noche
      "09d": "/build/img/clima/09d.png",         // Lluvias torrenciales dia
      "09n": "/build/img/clima/09n.png",         // Lluvias torrenciales noche
      "10d": "/build/img/clima/10d.png",         // Lluvias dia                  *
      "10n": "/build/img/clima/10n.png",         // Lluvias noche
      "11d": "/build/img/clima/11d.png",         // Tormentas dia
      "11n": "/build/img/clima/11n.png",         // Tormentas noche
      "13d": "/build/img/clima/13d.png",         // Nieve dia
      "13n": "/build/img/clima/13n.png",         // Nieve noche
      "50d": "/build/img/clima/50d.png",         // Niebla dia
      "50n": "/build/img/clima/50n.png"          // Niebla noche
    };
 
    $('#cityName').html(data['name']);
    $('#temp_m').html(data['main']['temp']);
    $('#te_max').html(data['main']['temp_max']);
    $('#te_min').html(data['main']['temp_min']);
    $('#humi_m').html(data['main']['humidity']);

    $('#pres').html(data['main']['pressure']);
    $('#alt').html(data['main']['grnd_level']);
    $('#ni_mar').html(data['main']['sea_level']);
    
    $('#nubes_des').html(data['weather'][0]['description']);
    $("#wicon").attr('src', weatherIcon[data.weather[0].icon]);

    $('#velo_win').html(data['wind']['speed']);
    $('#dire_win').html(data['wind']['deg']);
    $('#gust_win').html(data['wind']['gust']);

    let ama = data['sys']['sunrise'];
    let no = data['sys']['sunset'];
  
   segundos_amanecer = ama;
   segundos_anochecer = no;

    let fecha_am = new Date(ama * 1000);
    let hora_ama = fecha_am.getHours();
    let minu_ama = fecha_am.getMinutes();

    let fecha_no = new Date(no * 1000);
    let hora_no = fecha_no.getHours();
    let minu_no = fecha_no.getMinutes();

      

    if( hora_ama < 10 ) { hora_ama = '0' + hora_ama; }
    if( hora_no < 10 ) { hora_no = '0' + hora_no; }
    
    if( minu_ama < 10 ) { minu_ama = '0' + minu_ama; }
    if( minu_no < 10 ) { minu_no = '0' + minu_no; }
    

    let amanecer = (hora_ama + ":" + minu_ama);
    let anochecer = (hora_no + ":" + minu_no);


    document.querySelector('#hora_ama').innerHTML = amanecer;
    document.querySelector('#hora_no').innerHTML = anochecer

    document.querySelector('.anochecer_info').innerHTML = anochecer;
    document.querySelector('.amanecer_info').innerHTML = amanecer;
  }

  async function getWeatherdia() {
    const URI = `https://api.openweathermap.org/data/2.5/onecall?lat=39.16&lon=-3.84&exclude=current,minutely,hourly&appid=${key}&units=metric&lang=sp`;
    
    const response = await fetch(URI);
    const dataA = await response.json();

    let mes = my.getMonth()+1;
    let yea = my.getFullYear()
    
    const can_dias_mes = new Date(yea, mes, 0).getDate();
    var daym = mydate.getDate()+1;
   
    for(let i = 0; i < 4; i++){
      let dias = daym++;
      if(dias > can_dias_mes){ dias = dias - can_dias_mes;}

      $(`#diaa${[i]}`).html(dias);
      $("#temp"+ i).html(dataA.daily[i].temp.day);
      $("#humi"+ i).html(dataA.daily[i].humidity);
      $("#temp_x"+ i).html(dataA.daily[i].temp.max);
      $("#temp_m"+ i).html(dataA.daily[i].temp.min);
      
      var iconcode = dataA.daily[i].weather[0].icon;
      
      var iconurl = "https://openweathermap.org/img/w/" + iconcode + ".png";
      $("#wicon"+ i).attr('src', iconurl);
    }
  }

  async function polucion() {
    const URI = `https://api.openweathermap.org/data/2.5/air_pollution?lat=39.16&lon=-3.84&appid=${key}`;

    const response = await fetch(URI);
    const data = await response.json();

    document.querySelector('.ica').innerHTML = data.list[0].main.aqi;
    const ica = data.list[0].main.aqi;

    document.querySelector('.co').innerHTML = data.list[0].components.co;
    document.querySelector('.nh3').innerHTML = data.list[0].components.nh3;
    document.querySelector('.no').innerHTML = data.list[0].components.no;
    document.querySelector('.no2').innerHTML = data.list[0].components.no2;
    document.querySelector('.o3').innerHTML = data.list[0].components.o3;
    document.querySelector('.pm2_5').innerHTML = data.list[0].components.pm2_5;
    document.querySelector('.pm10').innerHTML = data.list[0].components.pm10;
    document.querySelector('.so2').innerHTML = data.list[0].components.so2;

    const fondoIca = document.querySelector('.ica');
    if (ica == 1) {
      fondoIca.style.backgroundColor = "green";
    } else if (ica == 2) {
      fondoIca.style.backgroundColor = "blue";
    } else if (ica == 3) {
      fondoIca.style.backgroundColor = "yellow";
    } else if (ica == 4) {
      fondoIca.style.backgroundColor = "orange";
    } else {
      fondoIca.style.backgroundColor = "red";
    }

  }

  function abreleyenda(){
    const conte_leyenda = document.querySelector('.conte_leyenda');
        conte_leyenda.classList.toggle('ocultar');
  }