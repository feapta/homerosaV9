<?php

// Opciones de producto

namespace Controllers;

use MVC\Router;

use Intervention\Image\ImageManagerStatic as Image;
use Model\Opciones;

class OpcionesControllers {    
     

    // Crear
    public static function opciones_crear(Router $router){
        $alertas = [];
        $opciones = new Opciones();
        $carpeta = CARPETA_IMAGEN_PRODUCTOS;

        debuguear("holas");
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $opciones = new Opciones($_POST['opcion']);

            // Seccion para subir imagenes y videos
            // Imagen 1
            if ($_FILES['opcion']['tmp_name']['imagen1'] !="") {
                $nombreImagen1 =  md5( uniqid( rand(), true)) . ".jpg";
                $imagen1 = Image::make($_FILES['opcion']['tmp_name']['imagen1'])->resize(350, 250);        // Tamaño de imagen
                $opciones->setImagen_numero($nombreImagen1, $carpeta, "1");                             // Comprobamos si exite la imagen
                $imagen1->save($carpeta . $nombreImagen1);
            }

            // Imagen 2
            if ( $_FILES['opcion']['tmp_name']['imagen2'] ) {
                $nombreImagen2 = md5( uniqid( rand(), true)) . ".jpg"; 
                $imagen2 = Image::make($_FILES['opcion']['tmp_name']['imagen2'])->resize(350, 250); 
                $opciones->setImagen_numero($nombreImagen2, $carpeta, "2");
                $imagen2->save($carpeta . $nombreImagen2);                                     
            }

            // Imagen 3
            if ($_FILES['opcion']['tmp_name']['imagen3'] ) {
                $nombreImagen3 = md5( uniqid( rand(), true)) . ".jpg"; 
                $imagen3 = Image::make($_FILES['opcion']['tmp_name']['imagen3'])->resize(350, 250); 
                $opciones->setImagen_numero($nombreImagen3, $carpeta, "3");
                $imagen3->save($carpeta . $nombreImagen3);                                     
            }

            $alertas = $opciones->validar();
           
            if(empty($alertas)){
                $opciones->guardar();
                header('Location: /opciones/admin');
            }
        }

        $router->rendertruck('/admin/opciones/crear', [
            'alertas' => $alertas,
            'opciones' => $opciones,
        ]);
    }

    // Edicion
    public static function opciones_edicion(Router $router){
        $id = validar0Redireccionar('/opciones/admin');
        $opciones = opciones::find($id);
        $alertas = [];
        $carpeta = CARPETA_IMAGEN_PRODUCTOS;

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $args = $_POST['opcion'];
            $opciones->sincronizar($args);

            $alertas = $opciones->validar();

            // Seccion para subir imagenes y videos
            if ($_FILES['producto']['tmp_name']['imagen1'] ) {
                $nombreImagen1 =  md5( uniqid( rand(), true)) . ".jpg";
                $imagen1 = Image::make($_FILES['producto']['tmp_name']['imagen1'])->resize(350, 250);        // Tamaño de imagen
                $opciones->setImagen_numero($nombreImagen1, $carpeta, "1");                                 // Comprobamos si exite la imagen
            }
            if ($_FILES['producto']['tmp_name']['imagen2'] ) {
                $nombreImagen2 = md5( uniqid( rand(), true)) . ".jpg"; 
                $imagen2 = Image::make($_FILES['producto']['tmp_name']['imagen2'])->resize(350, 250); 
                $opciones->setImagen_numero($nombreImagen2, $carpeta, "2");                                     
            }
            if ($_FILES['producto']['tmp_name']['imagen3'] ) {
                $nombreImagen3 = md5( uniqid( rand(), true)) . ".jpg"; 
                $imagen3 = Image::make($_FILES['producto']['tmp_name']['imagen3'])->resize(350, 250); 
                $opciones->setImagen_numero($nombreImagen3, $carpeta, "3");                                     
            }
            
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

                // Guarda el producto actualizado
                $opciones->guardar();
                header('Location: /opciones/admin');
            }
        }

         $router->rendertruck('/admin/opciones/actualizar', [
            'opciones' => $opciones,
            'alertas' => $alertas
        ]);
    }

}

?>