let resto=100-gas;var grafica_gas=document.getElementById("chart_gas").getContext("2d");const data={labels:["Red","Blue"],datasets:[{label:"My First Dataset",data:[gas,80],backgroundColor:["rgb(255, 99, 132)","rgb(54, 162, 235)"],hoverOffset:4}]};var options_gas={responsive:!0,showTooltips:!0,cutout:50},donutGas=new Chart(grafica_gas,{type:"doughnut",data:data,options:options_gas});