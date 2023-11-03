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

            // para poder hasear el password y guardarlo en la base de datos
                //$pass = password_hash($usuario->password, PASSWORD_BCRYPT);
                //debuguear($pass);

            $alertas = $usuario->validarDatos();

            if(empty($alertas)){
                $user =  Usuarios::whereValor('email', $usuario->email);

                if($user) {
                    if($user->validarPass($usuario->password)){
                        session_start();

                        $_SESSION['id'] = $user->id;
                        $_SESSION['imagen'] = $user->imagen;
                        $_SESSION['nombre'] = $user->nombre . " " . $user->apellidos;

                        header('Location: /domo');
                    }
                }
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