<?php

// productos

namespace Controllers;

use MVC\Router;
use Model\Trabajos;
use Intervention\Image\ImageManagerStatic as Image;


class TrabajosControllers {    
     // Listar productos
     public static function trabajos_admin(Router $router){
        $trabajos = Trabajos::all();

        $router->rendertruck('/admin/productos/productos', [
            'trabajos' => $trabajos
        ]);

    }
    public static function trabajos_admin_P(Router $router){
        $trabajos = Trabajos::all();
        foreach($trabajos as $data){
            $json['data'][] = $data;
            }
    
            $jsonstring = json_encode($json);
            echo $jsonstring;
    
            $router->rendertruck('/master', []);    
    }

    // Crear
    public static function trabajos_crear(Router $router){
        $alertas = [];
        $trabajos = new Trabajos;
        $carpeta = CARPETA_IMAGEN_TRABAJOS;
        $carpeta_videos = CARPETA_VIDEOS_TRABAJOS;

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
            $productos = new Trabajos($_POST['producto']);

            // Seccion para subir imagenes y videos
            if ($_FILES['trabajo']['tmp_name']['imagen1'] ) {
                $nombreImagen1 =  md5( uniqid( rand(), true)) . ".jpg";
                $imagen1 = Image::make($_FILES['trabajo']['tmp_name']['imagen1'])->resize(350, 250);        // Tamaño de imagen
                $trabajos->setImagen_numero($nombreImagen1, $carpeta, "1");                                 // Comprobamos si exite la imagen
            }
            if ($_FILES['trabajo']['tmp_name']['imagen2'] ) {
                $nombreImagen2 = md5( uniqid( rand(), true)) . ".jpg"; 
                $imagen2 = Image::make($_FILES['trabajo']['tmp_name']['imagen2'])->resize(350, 250); 
                $trabajos->setImagen_numero($nombreImagen2, $carpeta, "2");                                     
            }
            if ($_FILES['trabajo']['tmp_name']['imagen3'] ) {
                $nombreImagen3 = md5( uniqid( rand(), true)) . ".jpg"; 
                $imagen3 = Image::make($_FILES['trabajo']['tmp_name']['imagen3'])->resize(350, 250); 
                $trabajos->setImagen_numero($nombreImagen3, $carpeta, "3");                                     
            }
            // Video
            if ($_FILES['trabajo']['tmp_name']['video'] ) {

                $file_temp = $_FILES['trabajo']['tmp_name']['video'];
                $file_size = $_FILES['trabajo']['size']['video'];

                if($file_size < 20000000){
                    $nombrevideo = md5( uniqid( rand(), true)) . ".mp4";
                    $trabajos->setVideo($nombrevideo, $carpeta_videos);
                }else{
                    echo "<script>alert('Video demasiado grande')</script>";
                    echo "<script>window.location = '/productos/admin'</script>";
                }
            }
            
            $alertas = $trabajos->validar();
           
            if(empty($alertas)){
                $imagen1->save($carpeta . $nombreImagen1);
                $imagen2->save($carpeta . $nombreImagen2);
                $imagen3->save($carpeta . $nombreImagen3);

                move_uploaded_file($file_temp, $carpeta_videos.$nombrevideo);

                $trabajos->guardar();
                header('Location: /trabajos');
            }
        }

        $router->rendertruck('/admin/trabajos/crear', [
            'alertas' => $alertas,
            'productos' => $productos,

        ]);
    }

    // Edicion
    public static function productos_edicion(Router $router){
        $id = validar0Redireccionar('/trabajos/admin');
        $trabajos = Trabajos::find($id);
        $alertas = [];
        $carpeta = CARPETA_IMAGEN_TRABAJOS;
        $carpeta_videos = CARPETA_VIDEOS_TRABAJOS;

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $args = $_POST['producto'];
            $trabajos->sincronizar($args);

            $alertas = $trabajos->validar();

            // Seccion para subir imagenes y videos
            if ($_FILES['trabajo']['tmp_name']['imagen1'] ) {
                $nombreImagen1 =  md5( uniqid( rand(), true)) . ".jpg";
                $imagen1 = Image::make($_FILES['trabajo']['tmp_name']['imagen1'])->resize(350, 250);        // Tamaño de imagen
                $trabajos->setImagen_numero($nombreImagen1, $carpeta, "1");                                 // Comprobamos si exite la imagen
            }
            if ($_FILES['trabajo']['tmp_name']['imagen2'] ) {
                $nombreImagen2 = md5( uniqid( rand(), true)) . ".jpg"; 
                $imagen2 = Image::make($_FILES['trabajo']['tmp_name']['imagen2'])->resize(350, 250); 
                $trabajos->setImagen_numero($nombreImagen2, $carpeta, "2");                                     
            }
            if ($_FILES['trabajo']['tmp_name']['imagen3'] ) {
                $nombreImagen3 = md5( uniqid( rand(), true)) . ".jpg"; 
                $imagen3 = Image::make($_FILES['trabajo']['tmp_name']['imagen3'])->resize(350, 250); 
                $trabajos->setImagen_numero($nombreImagen3, $carpeta, "3");                                     
            }
            // Video
            if ($_FILES['trabajo']['tmp_name']['video'] ) {
                $file_temp = $_FILES['trabajo']['tmp_name']['video'];
                $file_size = $_FILES['trabajo']['size']['video'];

                if($file_size < 20000000){
                    $nombrevideo = md5( uniqid( rand(), true)) . ".mp4";
                    $trabajos->setVideo($nombrevideo, $carpeta_videos);
                }else{
                    echo "<script>alert('Video demasiado grande')</script>";
                    echo "<script>window.location = '/trabajos/admin'</script>";
                }
            }
           //debuguear($productos);
            if(empty($producto)) {
                // Sube las imagenes
                if($_FILES['trabajo']['tmp_name']['imagen1']){
                    $imagen1->save($carpeta . $nombreImagen1);
                }
                if($_FILES['trabajo']['tmp_name']['imagen2']){
                    $imagen2->save($carpeta . $nombreImagen2);
                }
                if($_FILES['trabajo']['tmp_name']['imagen3']){
                    $imagen3->save($carpeta . $nombreImagen3);
                }
                
                // Sube el video
                if($_FILES['trabajo']['tmp_name']['video']){
                    move_uploaded_file($file_temp, $carpeta_videos.$nombrevideo);
                }

                // Guarda el producto actualizado
                $trabajos->guardar();
                header('Location: /trabajos/admin');
            }
        }

         $router->rendertruck('/admin/productos/actualizar', [
            'trabajos' => $trabajos,
            'alertas' => $alertas
        ]);
    }


    // NAVEGACION CLIENTES

    // listar productos por categoria de la carta general
    public static function trabajos(Router $router){

        $trabajos = Trabajos::allOrdenAlfa('titulo');

        if(!$trabajos){
            Trabajos::setAlerta('error', 'Lo sentimos, pero no hemos encontrado productos');
        }

        $alertas = Trabajos::getAlertas();

        $router->rendertruck('/trabajos/trabajos', [
            'trabajos' => $trabajos,
            'alertas' => $alertas
        ]);
    }

}

?>