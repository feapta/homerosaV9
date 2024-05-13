<?php

// Truck zona

namespace Controllers;

use MVC\Router;
class TruckControllers{    

public static function master(Router $router) {
    debuguear("hola");
    
    $router->rendertruck('/truck', [

    ]);
}


}