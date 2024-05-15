<?php 

    // Pagina public/index.php

    require_once __DIR__ . '/../includes/app.php';

    use MVC\Router;
    use Controllers\UsuariosControllers;
    use Controllers\TruckControllers;

    $router = new Router();

    // Paginas
    $router->get('/', [UsuariosControllers::class, 'login']);
    $router->post('/', [UsuariosControllers::class, 'login']);

    $router->get('/domo', [UsuariosControllers::class, 'domo']);

    $router->get('/logout', [UsuariosControllers::class, 'logout']);
    
    
    // TRUCK
    $router->get('/truck', [TruckControllers::class, 'truck']);

    // Navegacion
    $router->get('/novedades', [TruckControllers::class, 'novedades']);
    $router->get('/productos', [TruckControllers::class, 'productos']);
    $router->get('/pruebas', [TruckControllers::class, 'pruebas']);



    $router->comprobarRutas();

?>