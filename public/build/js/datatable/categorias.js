function dataCategorias(){$("#categorias").DataTable({responsive:!0,ajax:{url:"/categorias/admin",method:"POST"},columnDefs:[{className:"idcatepro",targets:[0]},{className:"categoria",targets:[1]},{className:"imagen",targets:[2]},{className:"actualiza",targets:[3]},{className:"elimina",targets:[4]}],columns:[{data:"idcatepro"},{data:"categoria"},{data:"imagen",sortable:!1,searchable:!1,render:function(a){return 0==a?"N/A":'<img src="'+("/imagenes_categorias/"+a)+'"/>'}}],language:idioma})}$(document).ready((function(){dataCategorias()}));