function dataTrabajos(){$("#trabajos").DataTable({responsive:!0,ajax:{url:"/trabajos/admin_P",method:"POST"},columnDefs:[{className:"id",targets:[0]},{className:"titulo",targets:[1]},{className:"descripcion",targets:[2]},{className:"imagen1",targets:[3]},{className:"imagen2",targets:[4]},{className:"imagen3",targets:[5]},{className:"videos",targets:[6]},{className:"fecha_entrada",targets:[7]},{className:"actualiza",targets:[8]},{className:"elimina",targets:[9]}],columns:[{data:"id"},{data:"titulo"},{data:"descripcion"},{data:"imagen1",sortable:!1,searchable:!1,render:function(a){return 0==a?"N/A":'<img src="'+("/imagenes_trabajos/"+a)+'"/>'}},{data:"imagen2",sortable:!1,searchable:!1,render:function(a){return 0==a?"N/A":'<img src="'+("/imagenes_trabajos/"+a)+'"/>'}},{data:"imagen3",sortable:!1,searchable:!1,render:function(a){return 0==a?"N/A":'<img src="'+("/imagenes_trabajos/"+a)+'"/>'}},{data:"video",sortable:!1,searchable:!1,render:function(a){return 0==a?"N/A":'<video src="'+("/videos_trabajos/"+a)+'"/>'}},{data:"fecha_entrada"},{data:"id",sortable:!1,searchable:!1,render:function(a){return`<a href="/trabajo/admin/edicion?id=${a}"><img class="P_actualizar" src="/build/img/truck/actualizado.png"> </a>`}},{data:"id",sortable:!1,searchable:!1,render:function(a){return`<a onclick="abre_modal(${a}, 'trabajo);" ><img class="P_eliminar" src="/build/img/truck/papelera.png"></a>`}}],language:idioma})}$(document).ready((function(){dataTrabajos()}));