let suma = 0;

document.addEventListener('DOMContentLoaded', function(){
    desplegables();
    escucha_boton_envio();
    escucha_boton_envio_piscina();
  });



    // Cierra la conexion al servidor a los 90 segundos
    setTimeout(logoout, 90000);
        
        function logoout(){
            window.location.href = '/';
        }


    // Abre los desplegables
    function desplegables(){
        const btn = document.querySelectorAll('.boton_verde');
    
        btn.forEach( desple => {
            desple.addEventListener('click', () => {
                const abrir = desple.parentElement.querySelector('.desple');
                  abrir.classList.toggle('abrir');
            });
        })
    }

    // Iluminacion
    function escucha_boton_envio(){
        const boton_envio = document.querySelector('.guardar_nueva_hora');
        boton_envio.addEventListener('click', enviar_horas);
    }
    
    function enviar_horas() {
        const hora_encendido = document.querySelector('.nuevo_anochecer').value
        const hora_apagado = document.querySelector('.nuevo_amanecer').value
        
        let he = hora_encendido.toString();
        let ha = hora_apagado.toString();
    
        let msg_ilu = he + ',' + ha; 
        client.publish('domo/Salon/ilu/horarios', msg_ilu);
    };


    // Piscina
    function escucha_boton_envio_piscina(){
        const boton_envio = document.querySelector('.nuevo_horario_piscina');
        boton_envio.addEventListener('click', enviar_horas_piscina);
    }
    
    function enviar_horas_piscina() {
        const hora_encendido = document.querySelector('.inicio').value
        const hora_apagado = document.querySelector('.final').value
        
        let inicio = hora_encendido.toString();
        let final = hora_apagado.toString();
    
        let msg = inicio + ',' + final; 
        client.publish('domo/Taller/piscina/horario', msg);
    };

    // Ordenes piscina
    function envio_boton_piscina(n){
      let msg_piscina = n.toString();
      client.publish('domo/Taller/piscina/boton', msg_piscina);
    }
