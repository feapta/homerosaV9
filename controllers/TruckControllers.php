<?php

// Truck zona

namespace Controllers;

use MVC\Router;

class TruckControllers {    

    public static function truck(Router $router) {
        debug("holas");
        $router->render('truck');
    }


}

?>

