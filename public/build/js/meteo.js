var segundos_anochecer,segundos_amanecer;async function getWeather(){const e=await fetch("https://api.openweathermap.org/data/2.5/weather?lat=39.16&lon=-3.84&appid=a1afadd13ed6fe6311222c1e6b003ad1&units=metric&lang=sp"),n=await e.json();$("#cityName").html(n.name),$("#temp_m").html(n.main.temp),$("#te_max").html(n.main.temp_max),$("#te_min").html(n.main.temp_min),$("#humi_m").html(n.main.humidity),$("#pres").html(n.main.pressure),$("#alt").html(n.main.grnd_level),$("#ni_mar").html(n.main.sea_level),$("#nubes_des").html(n.weather[0].description),$("#wicon").attr("src",{"01d":"/build/img/clima/01d.png","01n":"/build/img/clima/01n.png","02d":"/build/img/clima/02d.png","02n":"/build/img/clima/02n.png","03d":"/build/img/clima/03d.png","03n":"/build/img/clima/03n.png","04d":"/build/img/clima/04d.png","04n":"/build/img/clima/04n.png","09d":"/build/img/clima/09d.png","09n":"/build/img/clima/09n.png","10d":"/build/img/clima/10d.png","10n":"/build/img/clima/10n.png","11d":"/build/img/clima/11d.png","11n":"/build/img/clima/11n.png","13d":"/build/img/clima/13d.png","13n":"/build/img/clima/13n.png","50d":"/build/img/clima/50d.png","50n":"/build/img/clima/50n.png"}[n.weather[0].icon]),$("#velo_win").html(n.wind.speed),$("#dire_win").html(n.wind.deg),$("#gust_win").html(n.wind.gust);let t=n.sys.sunrise,i=n.sys.sunset;segundos_amanecer=t,segundos_anochecer=i;let a=new Date(1e3*t),m=a.getHours(),l=a.getMinutes(),o=new Date(1e3*i),c=o.getHours(),r=o.getMinutes();m<10&&(m="0"+m),c<10&&(c="0"+c),l<10&&(l="0"+l),r<10&&(r="0"+r);let d=m+":"+l,u=c+":"+r;document.querySelector("#hora_ama").innerHTML=d,document.querySelector("#hora_no").innerHTML=u,document.querySelector(".anochecer").innerHTML=u,document.querySelector(".anochecer_info").innerHTML=u,document.querySelector(".amanecer").innerHTML=d,document.querySelector(".amanecer_info").innerHTML=d}async function getWeatherdia(){const e=await fetch("https://api.openweathermap.org/data/2.5/onecall?lat=39.16&lon=-3.84&exclude=current,minutely,hourly&appid=a1afadd13ed6fe6311222c1e6b003ad1&units=metric&lang=sp"),n=await e.json();let t=my.getMonth()+1,i=my.getFullYear();const a=new Date(i,t,0).getDate();var m=mydate.getDate()+1;for(let e=0;e<4;e++){let t=m++;t>a&&(t-=a),$("#diaa"+[e]).html(t),$("#temp"+e).html(n.daily[e].temp.day),$("#humi"+e).html(n.daily[e].humidity),$("#temp_x"+e).html(n.daily[e].temp.max),$("#temp_m"+e).html(n.daily[e].temp.min);var l="https://openweathermap.org/img/w/"+n.daily[e].weather[0].icon+".png";$("#wicon"+e).attr("src",l)}}async function polucion(){const e=await fetch("http://api.openweathermap.org/data/2.5/air_pollution?lat=39.16&lon=-3.84&appid=a1afadd13ed6fe6311222c1e6b003ad1"),n=await e.json();document.querySelector(".ica").innerHTML=n.list[0].main.aqi;const t=n.list[0].main.aqi;document.querySelector(".co").innerHTML=n.list[0].components.co,document.querySelector(".nh3").innerHTML=n.list[0].components.nh3,document.querySelector(".no").innerHTML=n.list[0].components.no,document.querySelector(".no2").innerHTML=n.list[0].components.no2,document.querySelector(".o3").innerHTML=n.list[0].components.o3,document.querySelector(".pm2_5").innerHTML=n.list[0].components.pm2_5,document.querySelector(".pm10").innerHTML=n.list[0].components.pm10,document.querySelector(".so2").innerHTML=n.list[0].components.so2;const i=document.querySelector(".ica");i.style.backgroundColor=1==t?"green":2==t?"blue":3==t?"yellow":4==t?"orange":"red"}function abreleyenda(){document.querySelector(".conte_leyenda").classList.toggle("ocultar")}$(document).ready((function(){my=new Date,getWeather(),getWeatherdia(),polucion();document.querySelector(".btn-leyenda").addEventListener("click",abreleyenda)}));