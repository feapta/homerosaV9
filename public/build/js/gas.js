var grafica_gas=document.getElementById("chart_gas").getContext("2d");const data={labels:["Red","Blue","Yellow"],datasets:[{label:"My First Dataset",data:[gas,100],backgroundColor:["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)"],hoverOffset:4}]};var options_gas={responsive:!0,showTooltips:!0},donutGas=new Chart(grafica_gas,{type:"doughnut",data:data,options:options_gas});