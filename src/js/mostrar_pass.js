
// Ver el password cuando se esta escribiendo
document.addEventListener('DOMContentLoaded', function(){
    iniciar_app();
});

function iniciar_app(){
    oculta_pass();
    mostrar_pass()
}

function mostrar_pass(){
    const imagenOcuta = document.querySelector('.seve')
    imagenOcuta.addEventListener('click', function(e){

        const tipo = document.querySelector('#password');
            if (tipo.type = 'password'){
                tipo.type = 'text';
            }

        document.querySelector('.seve').classList.toggle('ocultar');
        document.querySelector('.nove').classList.toggle('ocultar');

    });
}

function oculta_pass(){
    const imagenMuestra = document.querySelector('.nove')
    imagenMuestra.addEventListener('click', function(e){
        
        const tipo = document.querySelector('#password');
        if (tipo.type = 'text'){
            tipo.type = 'password';
        }

        document.querySelector('.seve').classList.toggle('ocultar');
        document.querySelector('.nove').classList.toggle('ocultar');

    });

}