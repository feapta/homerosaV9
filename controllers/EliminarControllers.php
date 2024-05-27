<?php

// Controlador de Categorias

namespace Controllers;

use Model\Productos;
use Model\Categorias;

class EliminarControllers{
        
    // ADMINISTRACION   /////////////////////////

   
    /* Eliminar*/
    public static function eliminar() {
   
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tipo = $_POST['tipo'];
           
            // peticiones validas
            if(validarTipoContenido($tipo) ) {
                if($tipo === 'producto'){
                    $carpeta = CARPETA_IMAGEN_PRODUCTOS;
                    $producto = Productos::find($_POST['id']);

                    if($producto->imagen){
                        $imagen = $producto->imagen;
                        $producto->setImagen($imagen, $carpeta);
                    }

                    $resultado = $producto->eliminar();
                                    
                    if($resultado){
                        $resultado =   [
                            'resultado' => $resultado,
                            'tipo' => 'producto'
                        ];
                    }

                    echo json_encode($resultado);
                } 
                elseif ($tipo === 'categoria'){
                    $carpeta = CARPETA_IMAGEN_CATEGORIAS;
                    $producto = Categorias::find($_POST['id']);

                    if($producto->imagen){
                        $imagen = $producto->imagen;
                        $producto->setImagen($imagen, $carpeta);
                    }

                    $resultado = $producto->eliminar();                

                    if($resultado){
                        $resultado =   [
                            'resultado' => $resultado,
                            'tipo' => 'categoria'
                        ];
                    }

                    echo json_encode($resultado);
                } 
            }
        }
    }
}