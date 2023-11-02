<?php

// Usuarios

namespace Controllers;

use Classes\Email;
use Model\Usuarios;
use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;

class UsuariosControllers{    

    // Acceso a usuarios
    public static function login(Router $router){
        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $usuario = new Usuarios($_POST);
            
            $alertas = $usuario->validarDatos();
 
            if(empty($alertas)){
                $usuarios =  Usuarios::whereValor('email', $usuario->email);
                $alertas = $usuario->validarPass($usuario->password);
                
                session_start();

                $_SESSION['id'] = $usuarios->id;
                $_SESSION['imagen'] = $usuarios->imagen;
                $_SESSION['nombre'] = $usuarios->nombre . " " . $usuarios->apellidos;

                header('Location: /domo');
                
            } else {
                Usuarios::setAlerta('error', 'Usuario no encontrado');
            }
        }   
    
        $alertas = Usuarios::getAlertas();
        
        $router->render('login',[
            'alertas' => $alertas
        ]);
    }    

    public static function domo(Router $router){

        $router->render('domo');
    }

    // Cierra la sesion del usuario
    public static function logout(){
        session_start();

        $_SESSION = [];
        
        header("Location: /");

    }

}

?>