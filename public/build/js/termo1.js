function escucha_boton_envio_termo1_horario(){document.querySelector(".nuevo_horario_termo1").addEventListener("click",enviar_horas_piscina)}function enviar_horas_termo1(){const e=document.querySelector(".inicio").value,o=document.querySelector(".final").value;let t=e.toString()+","+o.toString();client.publish("domo/Taller/recibe/termo1/horario",t)}function envio_boton_termo1(e){let o=n.toString();client.publish("domo/Taller/recibe/termo1/ordenes",o)}function termo3(e){let o=e.toString();client.publish("domo/Taller/recibe/termo3/ordenes",o)}document.addEventListener("DOMContentLoaded",(function(){escucha_boton_envio_termo1_horario()}));