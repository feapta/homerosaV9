var Bat24,motor_est,n=0;const options={clean:!0,connectTimeout:4e3,clientId:"homerosa_web-nueva",username:"homerosa_domo_v6",password:"homerosa_domo_mar120314mar@",keepalive:60},client=mqtt.connect("wss://sistemar.es:8084/mqtt",options);function informacion(){publicar()}function publicar(){client.publish("domo/Salon/peticion","hola"),client.publish("domo/Taller/peticion","hola"),client.publish("domo/Puerta/peticion","hola")}function foco(e){let t=e.toString();client.publish("domo/Puerta/foco",t,(function(e){console.log(t)})),document.getElementById("foco_on").style=1==t?"background-color: red":"background-color: #00bcd4;",0==t&&(document.getElementById("foco_on").style="background-color: #00bcd4;")}function inversor(e){let t=e.toString();client.publish("domo/Taller/inversor/ordenes",t)}function termo(e){let t=e.toString();client.publish("domo/Taller/termo/ordenes",t)}function puerta(e){let t=e.toString();client.publish("domo/Salon/puerta",t)}function motor(){let e;1==++n&&(e="1"),2==n&&(n=0,e="0"),document.getElementById("btn_motor").style="background-color: #f3e5f5",client.publish("domo/Salon/motor/ordenes",e)}function ilu_envio(e){let t=e.toString();client.publish("domo/Salon/ilu/ordenes",t)}client.on("connect",()=>{client.subscribe("domo/#",e=>{e||publicar()})}),client.on("message",(function(e,t){if("domo/Salon/medidas"==e){let e=t.toString().split(",");document.querySelector(".temp_exte").innerHTML=e[0],document.querySelector(".hume_aire").innerHTML=e[1],console.log("IP casa -> "+e[2]),document.getElementById("lux").innerHTML=e[3],document.getElementById("watios").innerHTML=e[4],document.querySelector(".temp_inte").innerHTML=e[5]}if("domo/Salon/ilu/estado"==e){let e=t.toString().split(","),o=e[0],n=e[1],l=e[2],c=e[3];"1"==o&&document.getElementById("bombilla").classList.add("animacion"),"0"==o&&document.getElementById("bombilla").classList.remove("animacion"),"1"==n&&(document.getElementById("btn_on").classList.add("active"),document.getElementById("btn_auto").classList.remove("active"),document.getElementById("btn_off").classList.remove("active")),"2"==n&&(document.getElementById("btn_auto").classList.add("active"),document.getElementById("btn_on").classList.remove("active"),document.getElementById("btn_off").classList.remove("active")),"0"==n&&(document.getElementById("btn_off").classList.add("active"),document.getElementById("btn_auto").classList.remove("active"),document.getElementById("btn_on").classList.remove("active")),document.querySelector(".anochecer_placa").innerHTML=l,document.querySelector(".amamecer_placa").innerHTML=c}if("domo/Puerta/general"==e){let e=t.toString().split(",");console.log("IP Puerta verja -> "+e[0]);let o=e[1],n=e[2];document.querySelector(".hume_suelo").innerHTML=e[3],0==n&&(document.getElementById("vehiculos").style="background-color: red "),0==o&&(document.getElementById("paso").style="background-color: red "),1==n&&(document.getElementById("cierro").style="border: solid 1px red ")}if("domo/Puerta/estado"==e){let e=t.toString();"0"==e&&(document.getElementById("cierro").style="border: solid 1px red;",document.getElementById("paso").style="background: #00bcd4;",document.getElementById("vehiculos").style="background: #00bcd4;"),"1"==e&&(document.getElementById("paso").style="background: red;",console.log("Puerta paso abierta")),"2"==e&&(document.getElementById("vehiculos").style="background: red; ",console.log("Puertas vehiculos abiertas"))}if("domo/Taller/medidas"==e){let e=t.toString().split(",");(Bat24=document.querySelector(".Bat24_card").innerHTML=e[0])?batCard24v(Bat24):document.querySelector(".img_24").src="/build/img/baterias/vacia.png",document.getElementById("agua").innerHTML=e[1];let o=e[1];console.log("IP Taller -> "+e[2]);let n=o/100;$("#barra-agua").width(n+"%").attr("aria-valuenow",n),nivel_agua(o);let l=document.querySelector(".Bat48_card").innerHTML=e[3];l?batCard48v(l):document.querySelector(".img_24").src="/build/img/baterias/vacia.png"}if("domo/Taller/motor/estado"==e){let e=t.toString().split(","),u=e[0],g=e[1],y=e[2],b=e[3],v=e[4];1==motor_est&&(n=1),"1"==u&&(document.getElementById("btn_motor").innerHTML="Marcha",document.getElementById("btn_motor").style="background-color: #ce2222",document.getElementById("img_motor").className="animacion"),"0"==u&&(document.getElementById("btn_motor").innerHTML="Parado",document.getElementById("img_motor").className="");var o=Math.floor(g/3600);o=o<10?"0"+o:o;var l=Math.floor(g/60%60);l=l<10?"0"+l:l;var c=g%60;c=c<10?"0"+c:c,document.getElementById("total_horas").innerHTML=o+":"+l+":"+c;var a=Math.floor(y/3600);a=a<10?"0"+a:a;var r=Math.floor(y/60%60);r=r<10?"0"+r:r;var i=y%60;i=i<10?"0"+i:i,document.getElementById("total_mes").innerHTML=a+":"+r+":"+i;var d=Math.floor(b/3600);d=d<10?"0"+d:d;var m=Math.floor(b/60%60);m=m<10?"0"+m:m;var s=b%60;s=s<10?"0"+s:s,document.getElementById("total_ahora").innerHTML=d+":"+m+":"+s,document.getElementById("litros_gasoil").innerHTML=e[4],nivel_Gasoil(v)}if("domo/Taller/inversor"==e){let e=t.toString();document.getElementById("inversor_on").style.backgroundColor="1"==e?"red":"#00e676","0"==e&&(document.getElementById("inversor_on").style.backgroundColor="#00e676")}if("domo/Taller/termo"==e){let e=t.toString();document.getElementById("termo_on").style.backgroundColor="1"==e?"red":"#00e676","0"==e&&(document.getElementById("termo_on").style.backgroundColor="#00e676")}if("domo/Taller/piscina/estados"==e){let e=t.toString().split(","),o=e[0],n=e[1],l=e[2],c=e[3];"1"==o&&(document.querySelector(".img_piscina").classList.add("animacion"),document.querySelector(".marcha").classList.toggle("ocultar"),document.querySelector(".parada").classList.toggle("ocultar")),"0"==o&&(document.querySelector(".img_piscina").classList.remove("animacion"),document.querySelector(".marcha").classList.toggle("ocultar"),document.querySelector(".parada").classList.toggle("ocultar")),"1"==n&&(document.getElementById("btn_on").classList.add("active"),document.getElementById("btn_auto").classList.remove("active"),document.getElementById("btn_off").classList.remove("active")),"2"==n&&(document.getElementById("btn_auto").classList.add("active"),document.getElementById("btn_on").classList.remove("active"),document.getElementById("btn_off").classList.remove("active")),"0"==n&&(document.getElementById("btn_off").classList.add("active"),document.getElementById("btn_auto").classList.remove("active"),document.getElementById("btn_on").classList.remove("active")),document.querySelector(".encendido_piscina").innerHTML=l,document.querySelector(".apagado_piscina").innerHTML=c}})),setInterval(informacion,1e4);