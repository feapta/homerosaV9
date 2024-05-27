<?php

// Controlador de Categorias

namespace Controllers;

use Model\Categorias;
use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;

class CategoriasControllers{
        
    // ADMINISTRACION   /////////////////////////

    // Listar categorias
    public static function categorias_admin(Router $router){
        $categorias = Categorias::all();

        $router->rendertruck('/admin/categorias/categorias', [
            'categorias' => $categorias
        ]);

    }
    public static function categorias_admin_P(Router $router){
        $categorias = Categorias::all();
        foreach($categorias as $data){
            $json['data'][] = $data;
            }
    
            $jsonstring = json_encode($json);
            echo $jsonstring;
    
            $router->rendertruck('/master', []);    
    }

    // Crear
    public static function categorias_crear(Router $router){
        $alertas = [];
        $categorias = new Categorias;
        $carpeta = CARPETA_IMAGEN_CATEGORIAS;

          if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $categorias = new Categorias($_POST['categorias']);
          
            // Seccion para subir imagenes
            $nombreImagen = md5( uniqid( rand(), true)) . ".jpg"; // 
            
            if($_FILES['categorias']['tmp_name']['imagen']){
                $imagen = Image::make($_FILES['categorias']['tmp_name']['imagen'])->resize(350, 250);
            
                $categorias->setImagen($nombreImagen, $carpeta);                                   
               }

            $alertas = $categorias->validar();
           
            if(empty($alertas)){
                $imagen->save($carpeta . $nombreImagen);                         // Guarda la imagen en el disco duro con la libreria intervention
                $categorias->guardar();
                header('Location: /categorias/admin');
            }
        }

        $router->rendertruck('/admin/categorias/crear', [
            'alertas' => $alertas,
            'categorias' => $categorias

        ]);
    }

    // Edicion
    public static function categorias_edicion(Router $router){
        $id = validar0Redireccionar('/categorias/admin');
        $categorias = Categorias::find($id);
        $alertas = [];
        $carpeta = CARPETA_IMAGEN_CATEGORIAS;

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $args = $_POST['categorias'];
            $categorias->sincronizar($args);

            // Validacion
            $alertas = $categorias->validar();
    
            // Generar nombre unico para cada imagen
            $nombreImagen = md5( uniqid( rand(), true)) . ".jpg"; // 
            
            // Setear la imagen a la clase
            if($_FILES['categorias']['tmp_name']['imagen']){
                $imagen = Image::make($_FILES['categorias']['tmp_name']['imagen'])->resize(300, 200);
                $categorias->setImagen($nombreImagen, $carpeta);                                   
               }

             // Inserta el registro en la base de datos si no hay errores
            if(empty($alertas)){
                if($_FILES['categorias']['tmp_name']['imagen']){
                    $imagen->save($carpeta . $nombreImagen);
                }

                $categorias->guardar();
                header('Location: /categorias/admin');
             }
        }

         $router->rendertruck('/admin/categorias/actualizar', [
            'categorias' => $categorias,
            'alertas' => $alertas
        ]);
    }


    // NAVEGACION CLIENTES

    public static function categorias(Router $router){
        $categorias = Categorias::all();

        $router->rendertruck('/productos/categorias', [
            'categorias' => $categorias
        ]);

    }

    
}