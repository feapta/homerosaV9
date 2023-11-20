function batCard24v(bat_24){

  if(bat_24 <= 22){
    const img_24 = document.querySelector('.img_24');
      img_24.src = "/build/img/baterias/vacia.png";
      img_24.classList.add('animacion_2');
  }
  if(bat_24 >= 23){
    const img_24 = document.querySelector('.img_24');
      img_24.src = "/build/img/baterias/llena_25.png";
      img_24.classList.add('animacion_2');
  }
  if(bat_24 >= 24){
    const img_24 = document.querySelector('.img_24');
      img_24.src = "/build/img/baterias/llena_50.png";
      img_24.classList.add('animacion_2');
  }
  if(bat_24 >= 25){
    const img_24 = document.querySelector('.img_24');
      img_24.src = "/build/img/baterias/llena_60.png";
      img_24.classList.add('animacion_2');
  }
  if(bat_24 >= 26){
    const img_24 = document.querySelector('.img_24');
      img_24.src = "/build/img/baterias/llena_75.png";
      img_24.classList.add('animacion_2');
  }
  if(bat_24 >= 27){
    const img_24 = document.querySelector('.img_24');
      img_24.src = "/build/img/baterias/llena_100.png";
      img_24.classList.add('animacion_2');
  }
  if(bat_24 >= 28){
    const img_24 = document.querySelector('.img_24');
      img_24.src = "/build/img/baterias/llena_100.png";
      img_24.classList.add('animacion_2');
  }
  if(bat_24 >= 29){
    const img_24 = document.querySelector('.img_24');
      img_24.src = "/build/img/baterias/llena.png";
      img_24.classList.add('animacion_2');
  }


}
