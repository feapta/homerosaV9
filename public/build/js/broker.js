var Bat24,motor_est,n=0;const options={clean:!0,connectTimeout:4e3,clientId:"homerosa_web-nueva",username:"homerosa_domo_v6",password:"homerosa_domo_mar120314mar@",keepalive:60},client=mqtt.connect("wss://sistemar.es:8084/mqtt",options);function informacion(){publicar()}function publicar(){client.publish("domo/Salon/peticion","hola"),client.publish("domo/Taller/peticion","hola"),client.publish("domo/Puerta/peticion","hola")}function foco(e){let o=e.toString();client.publish("domo/Puerta/foco",o,(function(e){console.log(o)})),document.getElementById("foco_on").style=1==o?"background-color: red":"background-color: #00bcd4;",0==o&&(document.getElementById("foco_on").style="background-color: #00bcd4;")}function inversor(e){let o=e.toString();client.publish("domo/Taller/inversor/ordenes",o)}function termo(e){let o=e.toString();client.publish("domo/Taller/termo/ordenes",o)}function puerta(e){let o=e.toString();client.publish("domo/Salon/puerta",o)}function motor(){let e;1==++n&&(e="1"),2==n&&(n=0,e="0"),document.getElementById("btn_motor").style="background-color: #f3e5f5",client.publish("domo/Salon/motor/ordenes",e)}function ilu_envio(e){let o=e.toString();client.publish("domo/Salon/ilu/ordenes",o)}client.on("connect",()=>{client.subscribe("domo/#",e=>{e||publicar()})}),client.on("message",(function(e,o){if("domo/Salon/medidas"==e){let e=o.toString().split(",");document.querySelector(".temp_exte").innerHTML=e[0],document.querySelector(".hume_aire").innerHTML=e[1],console.log("IP casa -> "+e[2]),document.getElementById("lux").innerHTML=e[3],document.getElementById("watios").innerHTML=e[4],document.querySelector(".temp_inte").innerHTML=e[5]}if("domo/Salon/ilu/estado"==e){let e=o.toString().split(","),t=e[0],n=e[1],l=e[2],i=e[3];"1"==t&&document.getElementById("bombilla").classList.add("animacion"),"0"==t&&document.getElementById("bombilla").classList.remove("animacion"),"1"==n&&(document.getElementById("btn_on").classList.add("activo"),document.getElementById("btn_auto").classList.remove("activo"),document.getElementById("btn_off").classList.remove("activo")),"2"==n&&(document.getElementById("btn_auto").style.backgroundColor="red)",document.getElementById("btn_on").classList.remove("activo"),document.getElementById("btn_off").classList.remove("activo")),"0"==n&&(document.getElementById("btn_off").classList.add("activo"),document.getElementById("btn_auto").classList.remove("activo"),document.getElementById("btn_on").classList.remove("activo"));let a=l.split(":");hora_on_ilu=a[0],minu_on_ilu=a[1],hora_on_ilu<10&&(hora_on_ilu="0"+hora_on_ilu),minu_on_ilu<10&&(minu_on_ilu="0"+minu_on_ilu);let r=hora_on_ilu+":"+minu_on_ilu,c=i.split(":");hora_off_ilu=c[0],minu_off_ilu=c[1],hora_off_ilu<10&&(hora_off_ilu="0"+hora_off_ilu),minu_off_ilu<10&&(minu_off_ilu="0"+minu_off_ilu);let m=hora_off_ilu+":"+minu_off_ilu;document.querySelector(".anochecer_placa").innerHTML=r,document.querySelector(".amanecer_placa").innerHTML=m}if("domo/Puerta/general"==e){let e=o.toString().split(",");console.log("IP Puerta verja -> "+e[0]);let t=e[1],n=e[2];document.querySelector(".hume_suelo").innerHTML=e[3],0==n&&(document.getElementById("vehiculos").style="background-color: red "),0==t&&(document.getElementById("paso").style="background-color: red "),1==n&&(document.getElementById("cierro").style="border: solid 1px red ")}if("domo/Puerta/estado"==e){let e=o.toString();"0"==e&&(document.getElementById("cierro").style="border: solid 1px red;",document.getElementById("paso").style="background: #00bcd4;",document.getElementById("vehiculos").style="background: #00bcd4;"),"1"==e&&(document.getElementById("paso").style="background: red;",console.log("Puerta paso abierta")),"2"==e&&(document.getElementById("vehiculos").style="background: red; ",console.log("Puertas vehiculos abiertas"))}if("domo/Taller/medidas"==e){let e=o.toString().split(",");(Bat24=document.querySelector(".Bat24_card").innerHTML=e[0])?batCard24v(Bat24):document.querySelector(".img_24").src="/build/img/baterias/vacia.png",document.getElementById("agua").innerHTML=e[1];let t=e[1];console.log("IP Taller -> "+e[2]);let n=t/100;$("#barra-agua").width(n+"%").attr("aria-valuenow",n),nivel_agua(t);let l=document.querySelector(".Bat48_card").innerHTML=e[3];l?batCard48v(l):document.querySelector(".img_24").src="/build/img/baterias/vacia.png"}if("domo/Taller/motor/estado"==e){let e=o.toString().split(","),s=e[0],_=e[1],g=e[2],f=e[3],y=e[4];1==motor_est&&(n=1),"1"==s&&(document.getElementById("btn_motor").innerHTML="Marcha",document.getElementById("btn_motor").style="background-color: #ce2222",document.getElementById("img_motor").className="animacion"),"0"==s&&(document.getElementById("btn_motor").innerHTML="Parado",document.getElementById("img_motor").className="");var t=Math.floor(_/3600);t=t<10?"0"+t:t;var l=Math.floor(_/60%60);l=l<10?"0"+l:l;var i=_%60;i=i<10?"0"+i:i,document.getElementById("total_horas").innerHTML=t+":"+l+":"+i;var a=Math.floor(g/3600);a=a<10?"0"+a:a;var r=Math.floor(g/60%60);r=r<10?"0"+r:r;var c=g%60;c=c<10?"0"+c:c,document.getElementById("total_mes").innerHTML=a+":"+r+":"+c;var m=Math.floor(f/3600);m=m<10?"0"+m:m;var d=Math.floor(f/60%60);d=d<10?"0"+d:d;var u=f%60;u=u<10?"0"+u:u,document.getElementById("total_ahora").innerHTML=m+":"+d+":"+u,document.getElementById("litros_gasoil").innerHTML=e[4],nivel_Gasoil(y)}if("domo/Taller/inversor"==e){let e=o.toString();document.getElementById("inversor_on").style.backgroundColor="1"==e?"red":"#00e676","0"==e&&(document.getElementById("inversor_on").style.backgroundColor="#00e676")}if("domo/Taller/termo"==e){let e=o.toString();document.getElementById("termo_on").style.backgroundColor="1"==e?"red":"#00e676","0"==e&&(document.getElementById("termo_on").style.backgroundColor="#00e676")}if("domo/Taller/piscina/estados"==e){let e=o.toString().split(","),t=e[0],n=e[1],l=e[2],i=e[3];"1"==t&&(document.querySelector(".img_piscina").classList.add("animacion"),document.querySelector(".marcha").classList.toggle("ocultar"),document.querySelector(".parada").classList.toggle("ocultar")),"0"==t&&(document.querySelector(".img_piscina").classList.remove("animacion"),document.querySelector(".marcha").classList.toggle("ocultar"),document.querySelector(".parada").classList.toggle("ocultar")),"1"==n&&(document.getElementById("btn_on_piscina").classList.add("activo"),document.getElementById("btn_auto_piscina").classList.remove("activo"),document.getElementById("btn_off_piscina").classList.remove("activo")),"2"==n&&(document.getElementById("btn_auto_piscina").classList.add("activo"),document.getElementById("btn_on_piscina").classList.remove("activo"),document.getElementById("btn_off_piscina").classList.remove("activo")),"0"==n&&(document.getElementById("btn_off_piscina").classList.add("activo"),document.getElementById("btn_auto_piscina").classList.remove("activo"),document.getElementById("btn_on_piscina").classList.remove("activo"));let a=l.split(":");hora_on=a[0],minu_on=a[1],hora_on<10&&(hora_on="0"+hora_on),minu_on<10&&(minu_on="0"+minu_on);let r=hora_on+":"+minu_on,c=i.split(":");hora_off=c[0],minu_off=c[1],hora_off<10&&(hora_off="0"+hora_off),minu_off<10&&(minu_off="0"+minu_off);let m=hora_off+":"+minu_off;document.querySelector(".encendido_piscina").innerHTML=r,document.querySelector(".apagado_piscina").innerHTML=m}})),setInterval(informacion,1e4);