<?php

// Registro de usuarios

namespace Controllers;

use Classes\Email;
use Model\Usuarios;
use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;

class UsuariosControllers{
    
    // Acceso a usuarios
    public static function acceso(Router $router){
        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $auth = new Usuarios($_POST);
            
            $alertas = $auth->validarLogin();
            $alertas = $auth->validarPass($auth->password);

            if(empty($alertas)){
                $usuarios =  Usuarios::whereValor('email', $auth->email);

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
        
        $router->render('paginas/login',[
            'alertas' => $alertas
        ]);
    }    

    // Cierra la sesion del usuario
    public static function logout(){
        session_start();

        $_SESSION = [];
        
        header("Location: /");

    }

}

?>