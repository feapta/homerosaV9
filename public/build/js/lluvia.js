var grafica_lluvia=document.getElementById("chart_lluvia").getContext("2d"),gradient=grafica_lluvia.createLinearGradient(0,0,180,0);gradient.addColorStop(0,"rgb(255, 99, 132)"),gradient.addColorStop(1,"rgb(54, 162, 235)");const data_lluvia={datasets:[{data:[valor],backgroundColor:[gradient,"rgb(54, 162, 235)"]}]};var options_lluvia={responsive:!0,showTooltips:!0,circumference:180,rotation:270,maintainAspectRatio:!1,cutout:40},donutlluvia=new Chart(grafica_lluvia,{type:"doughnut",data:data_lluvia,options:options_lluvia});function donut_lluvia(a){valorlluvia=new Number(a),resto=180-valorlluvia,valor=[resto,valorlluvia],donutlluvia.data.datasets[0].data=valor,donutlluvia.update(),muestra_alerta(a)}function muestra_alerta(a){if(a>45){document.querySelector(".alerta_lluvia").classList.remove("ocultar")}else alerta.classList.add("ocultar")}