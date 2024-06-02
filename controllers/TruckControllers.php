<?php

// Truck zona

namespace Controllers;

use Model\Productos;
use MVC\Router;

class TruckControllers {    

    public static function truck(Router $router) {
        $router->rendertruck('truck');
    }
    public static function novedades(Router $router) {
        $productos = Productos::filtroFecha();

        $router->rendertruck('novedades/novedades', [
            'productos' => $productos
        ]);
    }
    public static function pruebas(Router $router) {
        $router->rendertruck('pruebas/pruebas');
    }


}

?>

