var Bat24,motor_est,gas,lluvia,n=0;const options={clean:!0,connectTimeout:4e3,clientId:"homerosa_web-nueva",username:"homerosa_domo_v6",password:"homerosa_domo_mar120314mar@",keepalive:60},client=mqtt.connect("wss://sistemar.es:8084/mqtt",options);function informacion(){publicar()}function publicar(){client.publish("domo/Salon/peticion","hola"),client.publish("domo/Taller/recibe/peticion","hola"),client.publish("domo/Puerta/peticion","hola")}function foco(e){let o=e.toString();client.publish("domo/Puerta/foco",o,(function(e){console.log(o)})),document.getElementById("foco_on").style=1==o?"background-color: red":"background-color: #00bcd4;",0==o&&(document.getElementById("foco_on").style="background-color: #00bcd4;")}function inversor(e){let o=e.toString();client.publish("domo/Taller/recibe/inversor/ordenes",o)}function termo(e){let o=e.toString();client.publish("domo/Taller/recibe/termo/ordenes",o)}function puerta(e){let o=e.toString();client.publish("domo/Salon/puerta",o)}function motor(){let e;1==++n&&(e="1"),2==n&&(n=0,e="0"),document.getElementById("btn_motor").style="background-color: #f3e5f5",client.publish("domo/Salon/motor/ordenes",e)}function ilu_envio(e){let o=e.toString();client.publish("domo/Salon/ilu/ordenes",o)}client.on("connect",()=>{client.subscribe("domo/#",e=>{e||publicar()})}),client.on("message",(function(e,o){if("domo/Salon/medidas"==e){let e=o.toString().split(",");document.querySelector(".temp_exte").innerHTML=e[0],document.querySelector(".hume_aire").innerHTML=e[1],console.log("IP Salon -> "+e[2]),document.getElementById("lux").innerHTML=e[3],document.getElementById("watios").innerHTML=e[4],document.querySelector(".temp_inte").innerHTML=e[5],gas=e[6],donut_gas(gas),console.log(gas)}if("domo/Salon/ilu/estado"==e){let e=o.toString().split(","),t=e[0],n=e[1],r=e[2],l=e[3];"1"==t&&document.getElementById("bombilla").classList.add("animacion"),"0"==t&&document.getElementById("bombilla").classList.remove("animacion"),"1"==n&&(document.querySelector(".on").classList.add("activo"),document.querySelector(".auto").classList.remove("activo"),document.querySelector(".off").classList.remove("activo")),"2"==n&&(document.querySelector(".auto").classList.add("activo"),document.querySelector(".on").classList.remove("activo"),document.querySelector(".off").classList.remove("activo")),"0"==n&&(document.querySelector(".off").classList.add("activo"),document.querySelector(".auto").classList.remove("activo"),document.querySelector(".on").classList.remove("activo"));let a=r.split(":");hora_on_ilu=a[0],minu_on_ilu=a[1],hora_on_ilu<10&&(hora_on_ilu="0"+hora_on_ilu),minu_on_ilu<10&&(minu_on_ilu="0"+minu_on_ilu);let i=hora_on_ilu+":"+minu_on_ilu,c=l.split(":");hora_off_ilu=c[0],minu_off_ilu=c[1],hora_off_ilu<10&&(hora_off_ilu="0"+hora_off_ilu),minu_off_ilu<10&&(minu_off_ilu="0"+minu_off_ilu);let u=hora_off_ilu+":"+minu_off_ilu;document.querySelector(".anochecer_placa").innerHTML=i,document.querySelector(".amanecer_placa").innerHTML=u}if("domo/Puerta/general"==e){let e=o.toString().split(",");console.log("IP Puerta verja -> "+e[0]);let t=e[1],n=e[2];document.querySelector(".hume_suelo").innerHTML=e[3],0==n&&(document.getElementById("vehiculos").style="background-color: red "),0==t&&(document.getElementById("paso").style="background-color: red "),1==n&&(document.getElementById("cierro").style="border: solid 1px red "),lluvia=e[4],donut_lluvia(lluvia)}if("domo/Puerta/estado"==e){let e=o.toString();"0"==e&&(document.getElementById("cierro").style="border: solid 1px red;",document.getElementById("paso").style="background: #00bcd4;",document.getElementById("vehiculos").style="background: #00bcd4;"),"1"==e&&(document.getElementById("paso").style="background: red;",console.log("Puerta paso abierta")),"2"==e&&(document.getElementById("vehiculos").style="background: red; ",console.log("Puertas vehiculos abiertas"))}if("domo/Taller/medidas"==e){let e=o.toString().split(","),t=e[0],n=e[1],r=e[2],l=e[3];(Bat24=document.querySelector(".Bat24_card").innerHTML=t)?batCard24v(Bat24):document.querySelector(".img_24").src="/build/img/baterias/vacia.png",document.getElementById("agua").innerHTML=n;let a=e[1];console.log("IP Taller -> "+r);let i=a/100;$("#barra-agua").width(i+"%").attr("aria-valuenow",i),nivel_agua(a);let c=document.querySelector(".Bat48_card").innerHTML=l;c?batCard48v(c):document.querySelector(".img_24").src="/build/img/baterias/vacia.png"}if("domo/Taller/motor/estado"==e){let e=o.toString().split(","),d=e[0],_=e[1],f=e[2],g=e[3],y=e[4];1==motor_est&&(n=1),"1"==d&&(document.getElementById("btn_motor").innerHTML="Marcha",document.getElementById("btn_motor").style="background-color: #ce2222",document.getElementById("img_motor").className="animacion"),"0"==d&&(document.getElementById("btn_motor").innerHTML="Parado",document.getElementById("img_motor").className="");var t=Math.floor(_/3600);t=t<10?"0"+t:t;var r=Math.floor(_/60%60);r=r<10?"0"+r:r;var l=_%60;l=l<10?"0"+l:l,document.getElementById("total_horas").innerHTML=t+":"+r+":"+l;var a=Math.floor(f/3600);a=a<10?"0"+a:a;var i=Math.floor(f/60%60);i=i<10?"0"+i:i;var c=f%60;c=c<10?"0"+c:c,document.getElementById("total_mes").innerHTML=a+":"+i+":"+c;var u=Math.floor(g/3600);u=u<10?"0"+u:u;var m=Math.floor(g/60%60);m=m<10?"0"+m:m;var s=g%60;s=s<10?"0"+s:s,document.getElementById("total_ahora").innerHTML=u+":"+m+":"+s,document.getElementById("litros_gasoil").innerHTML=e[4],nivel_Gasoil(y)}if("domo/Taller/inversor"==e){let e=o.toString();document.getElementById("inversor_on").style.backgroundColor="1"==e?"red":"#00e676",document.getElementById("inversor_off").style.backgroundColor="0"==e?"red":"#00e676"}if("domo/Taller/termo"==e){let e=o.toString();document.getElementById("termo_on").style.backgroundColor="1"==e?"red":"#00e676",document.getElementById("termo_off").style.backgroundColor="0"==e?"red":"#00e676"}if("domo/Taller/piscina/estados"==e){let e=o.toString().split(","),t=e[0],n=e[1],r=e[2],l=e[3];"1"==t&&(document.querySelector(".img_piscina").classList.add("animacion"),document.querySelector(".marcha").classList.remove("ocultar"),document.querySelector(".parada").classList.add("ocultar")),"0"==t&&(document.querySelector(".img_piscina").classList.remove("animacion"),document.querySelector(".marcha").classList.add("ocultar"),document.querySelector(".parada").classList.remove("ocultar")),"1"==n&&(document.querySelector(".on_piscina").classList.add("activo"),document.querySelector(".auto_piscina").classList.remove("activo"),document.querySelector(".off_piscina").classList.remove("activo")),"2"==n&&(document.querySelector(".auto_piscina").classList.add("activo"),document.querySelector(".on_piscina").classList.remove("activo"),document.querySelector(".off_piscina").classList.remove("activo")),"0"==n&&(document.querySelector(".off_piscina").classList.add("activo"),document.querySelector(".auto_piscina").classList.remove("activo"),document.querySelector(".on_piscina").classList.remove("activo"));let a=r.split(":");hora_on=a[0],minu_on=a[1],hora_on<10&&(hora_on="0"+hora_on),minu_on<10&&(minu_on="0"+minu_on);let i=hora_on+":"+minu_on,c=l.split(":");hora_off=c[0],minu_off=c[1],hora_off<10&&(hora_off="0"+hora_off),minu_off<10&&(minu_off="0"+minu_off);let u=hora_off+":"+minu_off;document.querySelector(".encendido_piscina").innerHTML=i,document.querySelector(".apagado_piscina").innerHTML=u}})),setInterval(informacion,1e4);