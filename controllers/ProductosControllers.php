<?php

// productos

namespace Controllers;

use MVC\Router;

use Model\Productos;
use Model\Joinproductos;
use Model\Categorias;
use Intervention\Image\ImageManagerStatic as Image;
class productosControllers {    
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
        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
            $productos = new Productos($_POST['producto']);

            // Seccion para subir imagenes
            $nombreImagen = md5( uniqid( rand(), true)) . ".jpg"; // 

            if($_FILES['producto']['tmp_name']['imagen1']){
                $imagen = Image::make($_FILES['producto']['tmp_name']['imagen1'])->resize(350, 250);
                $productos->setImagen($nombreImagen, $carpeta);                                 
               }

            $alertas = $productos->validar();
           
            if(empty($alertas)){
                $imagen->save($carpeta . $nombreImagen);
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

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $args = $_POST['producto'];
            $productos->sincronizar($args);

            // Validacion
            $alertas = $productos->validar();
    
            // Generar nombre unico para cada imagen
            $nombreImagen = md5( uniqid( rand(), true)) . ".jpg"; // 
            
            // Setear la imagen a la clase
            if($_FILES['producto']['tmp_name']['imagen1']){
                $imagen = Image::make($_FILES['producto']['tmp_name']['imagen1'])->resize(300, 200);
                $productos->setImagen($nombreImagen, $carpeta);                                   
               }

             // Inserta el registro en la base de datos si no hay errores
            if(empty($alertas)){
                if($_FILES['producto']['tmp_name']['imagen1']){
                    $imagen->save($carpeta . $nombreImagen);
                }

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