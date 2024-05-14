<?php

// Usuarios

namespace Controllers;

use Model\Usuarios;
use MVC\Router;
class UsuariosControllers{    

    public static function login(Router $router){
        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $usuario = new Usuarios($_POST);
            $alertas = $usuario->validarDatos();

            if(empty($alertas)){
                $user =  Usuarios::whereValor('email', $usuario->email);

                if($user) {
                    if($user->validarPass($usuario->password)){
                        session_start();

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