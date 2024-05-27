<?php

// Truck zona

namespace Controllers;

use MVC\Router;

class TruckControllers {    

    public static function truck(Router $router) {
        $router->rendertruck('truck');
    }
    public static function novedades(Router $router) {
        $router->rendertruck('novedades/novedades');
    }
    public static function pruebas(Router $router) {
        $router->rendertruck('pruebas/pruebas');
    }


}

?>

