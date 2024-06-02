<?php

// productos

namespace Controllers;

use MVC\Router;

use Model\Productos;
use Model\Joinproductos;
use Model\Categorias;
use Intervention\Image\ImageManagerStatic as Image;
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
        $alertas = [];
        $productos = new Productos;
        $categorias = Categorias::all();
        $carpeta = CARPETA_IMAGEN_PRODUCTOS;
        $carpeta_videos = CARPETA_VIDEOS_PRODUCTOS;

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
            $productos = new Productos($_POST['producto']);

            // Seccion para subir imagenes y videos
            // Imagen 1
            if ($_FILES['producto']['tmp_name']['imagen1'] !="") {
                $nombreImagen1 =  md5( uniqid( rand(), true)) . ".jpg";
                $imagen1 = Image::make($_FILES['producto']['tmp_name']['imagen1'])->resize(350, 250);        // Tamaño de imagen
                $productos->setImagen_numero($nombreImagen1, $carpeta, "1");                             // Comprobamos si exite la imagen
                $imagen1->save($carpeta . $nombreImagen1);
            }

            // Imagen 2
            if ( $_FILES['producto']['tmp_name']['imagen2'] ) {
                $nombreImagen2 = md5( uniqid( rand(), true)) . ".jpg"; 
                $imagen2 = Image::make($_FILES['producto']['tmp_name']['imagen2'])->resize(350, 250); 
                $productos->setImagen_numero($nombreImagen2, $carpeta, "2");
                $imagen2->save($carpeta . $nombreImagen2);                                     
            }

            // Imagen 3
            if ($_FILES['producto']['tmp_name']['imagen3'] ) {
                $nombreImagen3 = md5( uniqid( rand(), true)) . ".jpg"; 
                $imagen3 = Image::make($_FILES['producto']['tmp_name']['imagen3'])->resize(350, 250); 
                $productos->setImagen_numero($nombreImagen3, $carpeta, "3");
                $imagen3->save($carpeta . $nombreImagen3);                                     
            }

            // Video
            if ($_FILES['producto']['tmp_name']['video'] ) {
                $file_temp = $_FILES['producto']['tmp_name']['video'];
                $file_size = $_FILES['producto']['size']['video'];

                if ( $file_size < 20000000 ){
                    $nombrevideo = md5( uniqid( rand(), true)) . ".mp4";
                    $productos->setVideo($nombrevideo, $carpeta_videos);
                    move_uploaded_file($file_temp, $carpeta_videos.$nombrevideo);
                } else {
                    echo "<script>alert('Video demasiado grande')</script>";
                    echo "<script>window.location = '/productos/admin'</script>";
                }
            }
            
            $alertas = $productos->validar();
           
            if(empty($alertas)){
                $productos->guardar();
                header('Location: /productos/admin');
            }
        }

        $router->rendertruck('/admin/productos/crear', [
            'alertas' => $alertas,
            'productos' => $productos,
            'categorias' =>$categorias

        ]);
    }

    // Edicion
    public static function productos_edicion(Router $router){
        $id = validar0Redireccionar('/productos/admin');
        $productos = Productos::find($id);
        $categorias = Categorias::all();
        $alertas = [];
        $carpeta = CARPETA_IMAGEN_PRODUCTOS;
        $carpeta_videos = CARPETA_VIDEOS_PRODUCTOS;

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $args = $_POST['producto'];
            $productos->sincronizar($args);

            $alertas = $productos->validar();

            // Seccion para subir imagenes y videos
            if ($_FILES['producto']['tmp_name']['imagen1'] ) {
                $nombreImagen1 =  md5( uniqid( rand(), true)) . ".jpg";
                $imagen1 = Image::make($_FILES['producto']['tmp_name']['imagen1'])->resize(350, 250);        // Tamaño de imagen
                $productos->setImagen_numero($nombreImagen1, $carpeta, "1");                                 // Comprobamos si exite la imagen
            }
            if ($_FILES['producto']['tmp_name']['imagen2'] ) {
                $nombreImagen2 = md5( uniqid( rand(), true)) . ".jpg"; 
                $imagen2 = Image::make($_FILES['producto']['tmp_name']['imagen2'])->resize(350, 250); 
                $productos->setImagen_numero($nombreImagen2, $carpeta, "2");                                     
            }
            if ($_FILES['producto']['tmp_name']['imagen3'] ) {
                $nombreImagen3 = md5( uniqid( rand(), true)) . ".jpg"; 
                $imagen3 = Image::make($_FILES['producto']['tmp_name']['imagen3'])->resize(350, 250); 
                $productos->setImagen_numero($nombreImagen3, $carpeta, "3");                                     
            }
            // Video
            if ($_FILES['producto']['tmp_name']['video'] ) {
                $file_temp = $_FILES['producto']['tmp_name']['video'];
                $file_size = $_FILES['producto']['size']['video'];

                if($file_size < 20000000){
                    $nombrevideo = md5( uniqid( rand(), true)) . ".mp4";
                    $productos->setVideo($nombrevideo, $carpeta_videos);
                }else{
                    echo "<script>alert('Video demasiado grande')</script>";
                    echo "<script>window.location = '/productos/admin'</script>";
                }
            }
           //debuguear($productos);
            if(empty($producto)) {
                // Sube las imagenes
                if($_FILES['producto']['tmp_name']['imagen1']){
                    $imagen1->save($carpeta . $nombreImagen1);
                }
                if($_FILES['producto']['tmp_name']['imagen2']){
                    $imagen2->save($carpeta . $nombreImagen2);
                }
                if($_FILES['producto']['tmp_name']['imagen3']){
                    $imagen3->save($carpeta . $nombreImagen3);
                }
                
                // Sube el video
                if($_FILES['producto']['tmp_name']['video']){
                    move_uploaded_file($file_temp, $carpeta_videos.$nombrevideo);
                }

                // Guarda el producto actualizado
                $productos->guardar();
                header('Location: /productos/admin');
            }
        }

         $router->rendertruck('/admin/productos/actualizar', [
            'productos' => $productos,
            'categorias' =>$categorias,
            'alertas' => $alertas
        ]);
    }


    // NAVEGACION CLIENTES

    // listar productos por categoria de la carta general
    public static function listadoProductos(Router $router){
        $id = validar0Redireccionar('/productos/productos');
        $catego = Categorias::where_array('id', $id);
        $productos = Productos::allOrdenAlfaGeneral($catego->id);
        //debuguear($productos);

        if(!$productos){
            Productos::setAlerta('error', 'Lo sentimos, pero no hemos encontrado productos');
        }

        $alertas = Productos::getAlertas();

        $router->rendertruck('/productos/productos', [
            'productos' => $productos,
            'categorias' => $catego,
            'alertas' => $alertas
        ]);
    }

}

?>