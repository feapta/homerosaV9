<?php

// productos

namespace Controllers;

use MVC\Router;

use Model\Productos;
use Model\Categorias;
use Intervention\Image\ImageManagerStatic as Image;
use Model\Opciones;
use Model\ProductosOpciones;

class ProductosControllers {    
     // Listar productos
    public static function productos_admin(Router $router){
        $productos = Productos::all();

        $router->rendertruck('/admin/productos/productos', [
            'productos' => $productos
        ]);

    }
    public static function productos_admin_P(Router $router){
        $productos = Productos::all();
        foreach($productos as $data){
            $json['data'][] = $data;
            }
    
            $jsonstring = json_encode($json);
            echo $jsonstring;
    
            $router->rendertruck('/master', []);    
    }



    // Crear
    public static function productos_crear(Router $router){
        session_start();
        $alertas = [];
        $productos = new Productos;
        $categorias = Categorias::all();
        $autonumero = Productos::autonumero();

        $router->rendertruck('/admin/productos/crear', [
            'alertas' => $alertas,
            'productos' => $productos,
            'categorias' =>$categorias,
            'autonumero' => $autonumero

        ]);
    }

    // GUARDAR PRODUCTOS CON SUS OPCIONES
    public static function guardar() {
        $productos = $_POST;
        $opciones = json_decode($productos['opciones'], true);
        
        $carpeta_videos = CARPETA_VIDEOS_PRODUCTOS;
        $carpeta = CARPETA_IMAGEN_PRODUCTOS;

        // Guarda el producto
        $producto = new Productos($productos);

        
        if($_FILES['files']['tmp_name']['video'][0]){
            $file_temp = $_FILES['files']['tmp_name']['video'][0];
            $file_size = $_FILES['files']['size']['video'][0];

            
            if ( $file_size < 15000000 ){
                $nombrevideo = md5( uniqid( rand(), true)) . ".mp4";
                $producto->setVideo($nombrevideo, $carpeta_videos);
                move_uploaded_file($file_temp, $carpeta_videos.$nombrevideo);
            } else {
                    echo "<script>alert('Video demasiado grande')</script>";
                    echo "<script>window.location = '/productos/admin'</script>";
            }
        }
                    
        $resultado = $producto->guardar();
        
        
        // Guarda las opciones
        if($resultado) {
            for ($i = 0; $i < count($opciones); $i++){
                $opcion = new Opciones($opciones[$i]);
                $opcion->idproducto =  $productos['autonumero'];
                
                if($_FILES['files']['tmp_name']['imagen']){
                    $cuenta =count($_FILES['files']['name']['imagen']);
                    $b = 0;
                    
                    for ($a = 0; $a < $cuenta; $a++) {
                        $b = $a + 1;
                        // Nombre para imagenes
                        $nombreImagen = md5( uniqid( rand(), true)) . ".jpg"; // 
                        // Guarda las imagenes
                        $imagen[$b] = Image::make($_FILES['files']['tmp_name']['imagen'][$a])->resize(350, 250);
                        $opcion->setImagen_numero($nombreImagen, $carpeta, $b);
                        $imagen[$b]->save($carpeta . $nombreImagen);
                        
                    }
                }

                $opcion->guardar();
            }

            if( $resultado ) { echo json_encode("ok"); }
            
        }
    }



    // Edicion
    public static function productos_edicion(Router $router){
        $id = validar0Redireccionar('/productos/admin');
        $productos = Productos::find($id);
        $categorias = Categorias::all();
        $alertas = [];

         $router->rendertruck('/admin/productos/actualizar', [
            'productos' => $productos,
            'categorias' => $categorias,
            'alertas' => $alertas
        ]);
    }
    
    // Edicion

    public static function productos_edicion_P(){
        $id = validar0Redireccionar('/productos/admin');
        $productos = Productos::find($id);
        $opciones = Opciones::allporProducto($productos->autonumero);

        foreach($opciones as $data){
            $json['data'][] = $data;
            }
    
            $jsonstring = json_encode($json);
            echo $jsonstring;
    
    }


    // NAVEGACION CLIENTES

    // listar productos por categoria """OK"""
    public static function listadoProductos(Router $router){
        $id = validar0Redireccionar('/productos/productos');
        
        $consulta = "SELECT productos.id, productos.titulo, productos.video, opciones.precio_venta, opciones.imagen1 FROM productos ";
        $consulta .= "LEFT OUTER JOIN categorias ON productos.idcate = categorias.id ";
        $consulta .= "LEFT OUTER JOIN opciones ON opciones.idproducto = productos.autonumero AND opciones.opcion = 'opcion 1' ";
        $consulta .= "WHERE productos.idcate = $id";

        $productos = ProductosOpciones::SQL($consulta);

        if(!$productos){
            Productos::setAlerta('error', 'Lo sentimos, pero no hemos encontrado productos');
        }

        $alertas = Productos::getAlertas();

        $router->rendertruck('/productos/productos', [
            'productos' => $productos,
            'alertas' => $alertas
        ]);
    }


    public static function productoSeleccionado(Router $router) {
        $id = validar0Redireccionar('/productos/productos');
        $productos = Productos::find($id);
        $opciones = Opciones::allporProducto($productos->autonumero);
        
        
        //debuguear($consulta);

    


        $router->rendertruck('/productos/detalle', [
            'productos' => $productos,
            'opciones' => $opciones
        ]);
    }

 /*


        $consulta = "SELECT opciones.opcion, opciones.precio_venta, opciones.imagen1, opciones.imagen2, opciones.imagen3, opciones.descripcion, opciones.medidas, ";
        $consulta .= "productos.titulo, productos.unidades, productos.video ";
        $consulta .= "FROM opciones ";
        $consulta .= "LEFT OUTER JOIN productos ON opciones.idproducto = productos.autonumero ";
        $consulta .= "WHERE productos.id = $id ";

    $productos = ProductosOpciones::SQL($consulta);


 SELECT opciones.titulo, opciones.precio_venta, opciones.imagen1, productos.video FROM opciones 
	LEFT OUTER JOIN productos ON opciones.idproducto = productos.autonumero WHERE productos.autonumero = 3 LIMIT 1

         $consulta = "SELECT opciones.titulo, opciones.precio_venta, opciones.imagen1, productos.video ";
        $consulta .= "FROM opciones";
        $consulta .= "LEFT OUTER JOIN productos ON opciones.idproducto = productos.autonumero ";
        $consulta .= "WHERE productos.autonumero = $id LIMIT 1";

 */

}

?>