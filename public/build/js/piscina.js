function escucha_boton_envio_piscina_horario(){document.querySelector(".nuevo_horario_piscina").addEventListener("click",enviar_horas_piscina)}function enviar_horas_piscina(){const i=document.querySelector(".inicio").value,n=document.querySelector(".final").value;let o=i.toString()+","+n.toString();client.publish("domo/Taller/recibe/piscina/horario",o)}function envio_boton_piscina(i){let n=i.toString();client.publish("domo/Taller/recibe/piscina/boton",n)}document.addEventListener("DOMContentLoaded",(function(){escucha_boton_envio_piscina_horario()}));