function muestraRelog(){mydate=new Date;let e=mydate.getHours(),t=mydate.getMinutes(),n=mydate.getSeconds(),a=mydate.getDate(),o=mydate.getMonth()+1,r=mydate.getFullYear();e<10&&(e="0"+e),t<10&&(t="0"+t),n<10&&(n="0"+n),r<1e3&&(r+=1900),o<10&&(o="0"+o),a<10&&(a="0"+a),document.querySelector("#hora").innerHTML=e+":"+t+":"+n,document.querySelector(".hora").innerHTML=e+":"+t+":"+n,document.querySelector("#fecha").innerHTML=a+"/"+o+"/"+r}document.addEventListener("DOMContentLoaded",(function(e){muestraRelog()})),setInterval(muestraRelog,1e3);