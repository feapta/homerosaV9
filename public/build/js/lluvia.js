var grafica_lluvia=document.getElementById("chart_lluvia").getContext("2d"),gradient=grafica_lluvia.createLinearGradient(0,0,0,600);gradient.addColorStop(0,"rgb(255, 99, 132)"),gradient.addColorStop(0,2,"rgb(255, 205, 86)"),gradient.addColorStop(0,4,"rgb(54, 162, 235)"),gradient.addColorStop(0,6,"rgb(27, 247, 167 )"),gradient.addColorStop(0,8,"rgb(51, 249, 255 )"),gradient.addColorStop(1,"rgb(54, 162, 235)");const data_lluvia={datasets:[{data:[valor],backgroundColor:[gradient,"rgb(54, 162, 235)"]}]};var options_lluvia={responsive:!0,showTooltips:!0,circumference:180,rotation:-90,maintainAspectRatio:!1,cutout:40},donutlluvia=new Chart(grafica_lluvia,{type:"doughnut",data:data_lluvia,options:options_lluvia});function donut_lluvia(a){valorlluvia=new Number(a),resto=180-valorlluvia,valor=[resto,valorlluvia],donutlluvia.data.datasets[0].data=valor,donutlluvia.update()}