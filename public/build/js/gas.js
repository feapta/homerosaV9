let resto,valor;var grafica_gas=document.getElementById("chart_gas").getContext("2d");const data_gas={labels:["Azul"],datasets:[{data:[valor],backgroundColor:["rgb(54, 162, 235)"],hoverOffset:4}]};var options_gas={responsive:!0,showTooltips:!0,cutout:50,circumference:180,rotation:-90},donutGas=new Chart(grafica_gas,{type:"doughnut",data:data_gas,options:options_gas});function donut_gas(a){valorgas=new Number(a),resto=180-valorgas,valor=[valorgas,resto],donutGas.data.datasets[0].data=valor,donutGas.update()}