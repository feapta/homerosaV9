var Bat24,motor_est,n=0;const options={clean:!0,connectTimeout:4e3,clientId:"homerosa_web-nueva",username:"homerosa_domo_v6",password:"homerosa_domo_mar120314mar@",keepalive:60};document.addEventListener("DOMContentLoaded",(function(){desplegables(),escucha_boton_envio()}));const client=mqtt.connect("wss://sistemar.es:8084/mqtt",options);function publicar(){client.publish("domo/peticion/Salon","hola"),client.publish("domo/Taller/peticion","hola"),client.publish("domo/peticion/Puerta","hola")}function foco(e){let t=e.toString();client.publish("domo/puerta/foco",t,(function(e){console.log(t)})),document.getElementById("foco_on").style=1==t?"background-color: red":"background-color: #00bcd4;",0==t&&(document.getElementById("foco_on").style="background-color: #00bcd4;")}function inversor(e){let t=e.toString();client.publish("domo/Taller/in/ordenes",t)}function termo(e){let t=e.toString();client.publish("domo/Taller/te/ordenes",t)}function puerta(e){let t=e.toString();client.publish("domo/puerta",t)}function motor(){let e;1==++n&&(e="1"),2==n&&(n=0,e="0"),document.getElementById("btn_motor").style="background-color: #f3e5f5",client.publish("domo/motor/ordenes",e)}function ilu_envio(e){let t=e.toString();client.publish("domo/ilu/ordenes",t)}function desplegables(){document.querySelectorAll(".boton_verde").forEach(e=>{e.addEventListener("click",()=>{e.parentElement.querySelector(".desple").classList.toggle("abrir")})})}function escucha_boton_envio(){document.querySelector(".guardar_nueva_hora").addEventListener("click",enviar_horas)}function enviar_horas(){const e=document.querySelector(".nuevo_anochecer").value,t=document.querySelector(".nuevo_amanecer").value;let o=e.toString()+","+t.toString();client.publish("domo/ilu/horas",o)}client.on("connect",()=>{client.subscribe("domo/#",e=>{e||publicar()})}),client.on("message",(function(e,t){if("domo/medidas/salon"==e){let e=t.toString().split(",");document.querySelector(".temp_exte").innerHTML=e[0],document.querySelector(".hume_aire").innerHTML=e[1],console.log("IP casa -> "+e[2]),document.getElementById("lux").innerHTML=e[3],document.getElementById("watios").innerHTML=e[4],document.querySelector(".temp_inte").innerHTML=e[5]}if("domo/ilu/boton"==e){let e=t.toString();"1"==e&&(document.getElementById("btn_on").classList.add("active"),document.getElementById("btn_auto").classList.remove("active"),document.getElementById("btn_off").classList.remove("active")),"2"==e&&(document.getElementById("btn_auto").classList.add("active"),document.getElementById("btn_on").classList.remove("active"),document.getElementById("btn_off").classList.remove("active")),"0"==e&&(document.getElementById("btn_off").classList.add("active"),document.getElementById("btn_auto").classList.remove("active"),document.getElementById("btn_on").classList.remove("active"))}if("domo/ilu/estado"==e){let e=t.toString();"1"==e&&(document.getElementById("bombilla").className="animacion"),"0"==e&&(document.getElementById("bombilla").className="")}if("domo/ilu/lux"==e){let e=t.toString();console.log(e)}if("domo/hora/envio"==e){t.toString().split(",")}if("domo/puerta/general"==e){let e=t.toString().split(",");console.log("IP Puerta verja -> "+e[0]);let o=e[1],n=e[2];document.querySelector(".hume_suelo").innerHTML=e[3],0==n&&(document.getElementById("vehiculos").style="background-color: red "),0==o&&(document.getElementById("paso").style="background-color: red "),1==n&&(document.getElementById("cierro").style="border: solid 1px red ")}if("domo/puerta/estado"==e){let e=t.toString();"0"==e&&(document.getElementById("cierro").style="border: solid 1px red;",document.getElementById("paso").style="background: #00bcd4;",document.getElementById("vehiculos").style="background: #00bcd4;"),"1"==e&&(document.getElementById("paso").style="background: red;",console.log("Puerta paso abierta")),"2"==e&&(document.getElementById("vehiculos").style="background: red; ",console.log("Puertas vehiculos abiertas"))}if("domo/Taller/medidas"==e){let e=t.toString().split(",");(Bat24=document.querySelector(".Bat24_card").innerHTML=e[0])?batCard24v(Bat24):document.querySelector(".img_24").src="/build/img/baterias/vacia.png",document.getElementById("agua").innerHTML=e[1];let o=e[1];console.log("IP Taller -> "+e[2]);let n=o/100;$("#barra-agua").width(n+"%").attr("aria-valuenow",n),nivel_agua(o);let l=document.querySelector(".Bat48_card").innerHTML=e[3];l?batCard48v(l):document.querySelector(".img_24").src="/build/img/baterias/vacia.png"}if("domo/Taller/motor/estado"==e){let e=t.toString().split(","),s=e[0],g=e[1],b=e[2],y=e[3],v=e[4];1==motor_est&&(n=1),"1"==s&&(document.getElementById("btn_motor").innerHTML="Marcha",document.getElementById("btn_motor").style="background-color: #ce2222",document.getElementById("img_motor").className="animacion"),"0"==s&&(document.getElementById("btn_motor").innerHTML="Parado",document.getElementById("img_motor").className="");var o=Math.floor(g/3600);o=o<10?"0"+o:o;var l=Math.floor(g/60%60);l=l<10?"0"+l:l;var r=g%60;r=r<10?"0"+r:r,document.getElementById("total_horas").innerHTML=o+":"+l+":"+r;var c=Math.floor(b/3600);c=c<10?"0"+c:c;var a=Math.floor(b/60%60);a=a<10?"0"+a:a;var d=b%60;d=d<10?"0"+d:d,document.getElementById("total_mes").innerHTML=c+":"+a+":"+d;var i=Math.floor(y/3600);i=i<10?"0"+i:i;var m=Math.floor(y/60%60);m=m<10?"0"+m:m;var u=y%60;u=u<10?"0"+u:u,document.getElementById("total_ahora").innerHTML=i+":"+m+":"+u,document.getElementById("litros_gasoil").innerHTML=e[4],nivel_Gasoil(v)}if("domo/Taller/inversor"==e){let e=t.toString();document.getElementById("inversor_on").style="1"==e?"background-color: red;":"background-color: #00bcd4;","0"==e&&(document.getElementById("inversor_on").style="background-color: #00bcd4;")}if("domo/Taller/termo"==e){let e=t.toString();document.getElementById("termo_on").style="1"==e?"background-color: red;":"background-color: #00bcd4;","0"==e&&(document.getElementById("termo_on").style="background-color: #00bcd4;")}}));