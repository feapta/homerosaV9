let resto,valorGas;var grafica_gas=document.getElementById("chart_gas").getContext("2d");const data={labels:["Blue","Red"],datasets:[{data:[valorGas,resto],backgroundColor:["rgb(54, 162, 235)","rgb(255, 99, 132)"],hoverOffset:4}]};var options_gas={responsive:!0,showTooltips:!0,circumference:180,rotation:-90},donutGas=new Chart(grafica_gas,{type:"doughnut",data:data,options:options_gas});export function donut_gas(a){valorGas=new Number(a),resto=100-a,console.log(valorGas),donutGas.data.datasets.data=valorGas,donutGas.update()}