var grafica_lluvia=document.getElementById("chart_lluvia").getContext("2d");const data_lluvia={labels:["Lluvias","Seco"],datasets:[{data:[valor],backgroundColor:["rgb(54, 162, 235)","rgb(255, 99, 132)"],hoverOffset:4}]};var options_lluvia={responsive:!0,showTooltips:!0,circumference:180,rotation:-90,cutout:50},donutlluvia=new Chart(grafica_lluvia,{type:"doughnut",data:data_lluvia,options:options_lluvia});function donut_lluvia(a){valorlluvia=new Number(a),resto=180-valorlluvia,valor=[valorlluvia,resto],donutlluvia.data.datasets[0].data=valor,donutlluvia.update()}