let suma=0;function logoout(){window.location.href="/"}function desplegables(){document.querySelectorAll(".boton_verde").forEach(e=>{e.addEventListener("click",()=>{e.parentElement.querySelector(".desple").classList.toggle("abrir")})})}function escucha_boton_envio(){document.querySelector(".guardar_nueva_hora").addEventListener("click",enviar_horas)}function enviar_horas(){const e=document.querySelector(".nuevo_anochecer").value,o=document.querySelector(".nuevo_amanecer").value;let n=e.toString()+","+o.toString();client.publish("domo/Salon/ilu/horarios",n)}function escucha_boton_envio_piscina(){document.querySelector(".nuevo_horario_piscina").addEventListener("click",enviar_horas_piscina)}function enviar_horas_piscina(){const e=document.querySelector(".inicio").value,o=document.querySelector(".final").value;let n=e.toString()+","+o.toString();client.publish("domo/Taller/piscina/horario",n)}function envio_boton_piscina(e){let o=e.toString();client.publish("domo/Taller/piscina/boton",o)}document.addEventListener("DOMContentLoaded",(function(){desplegables(),escucha_boton_envio(),escucha_boton_envio_piscina()})),setTimeout(logoout,9e4);