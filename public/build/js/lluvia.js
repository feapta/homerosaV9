var grafica_lluvia=document.getElementById("chart_lluvia").getContext("2d"),chart=new Chart(grafica_lluvia,{type:"doughnut",data:{labels:[],datasets:[{label:"Nivel lluvia",data:[lluvia],borderWidth:2,borderColor:"#4189E4",fill:!1,lineTension:.3}]},options:{labels:{fontColor:"white"},responsive:!0,legend:{display:!0,labels:{fontColor:"#7BD1B2"}}}});