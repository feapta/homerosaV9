

// porcentajes

//49.5 = 65% - 64%

function batCard48v(bat_48){

    if(bat_48 <= 47.5){
      const img_48 = document.querySelector('.img_48');
        document.querySelector('.porcentaje').innerHTML = 0;
        img_48.src = "/build/img/baterias/vacia.png";
        img_48.classList.add('animacion_2');
    }
    if(bat_48 >= 48){
      const img_48 = document.querySelector('.img_48');
        document.querySelector('.porcentaje').innerHTML = 20;
        img_48.src = "/build/img/baterias/llena_25.png";
        img_48.classList.add('animacion_2');
    }
    if(bat_48 >= 48.5){
      const img_48 = document.querySelector('.img_48');
        document.querySelector('.porcentaje').innerHTML = 35;
        img_48.src = "/build/img/baterias/llena_40.png";
        img_48.classList.add('animacion_2');
    }
    if(bat_48 >= 49){
      const img_48 = document.querySelector('.img_48');
        document.querySelector('.porcentaje').innerHTML = 55;
        img_48.src = "/build/img/baterias/llena_40.png";
        img_48.classList.add('animacion_2');
    }
    if(bat_48 >= 49.5){
      document.querySelector('.porcentaje').innerHTML = 65;
      const img_48 = document.querySelector('.img_48');
        img_48.src = "/build/img/baterias/llena_50.png";
        img_48.classList.add('animacion_2');
    }
    if(bat_48 >= 50){
      const img_48 = document.querySelector('.img_48');
        document.querySelector('.porcentaje').innerHTML = 70;
        img_48.src = "/build/img/baterias/llena_60.png";
        img_48.classList.add('animacion_2');
    }
    if(bat_48 >= 51.5){
      const img_48 = document.querySelector('.img_48');
        document.querySelector('.porcentaje').innerHTML = 90;
        img_48.src = "/build/img/baterias/llena_75.png";
        img_48.classList.add('animacion_2');
    }
    if(bat_48 >= 52){
      const img_48 = document.querySelector('.img_48');
        document.querySelector('.porcentaje').innerHTML = 100;
        img_48.src = "/build/img/baterias/llena.png";
        img_48.classList.add('animacion_2');
    }
  
  
  }
  
  