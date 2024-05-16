<?php 

    // Pagina public/index.php

    require_once __DIR__ . '/../includes/app.php';

use Controllers\NovedadesControllers;
use Controllers\ProductosControllers;
use Controllers\PruebasControllers;
use Controllers\UsuariosControllers;
use Controllers\TruckControllers;
use Controllers\CategoriasControllers;
use MVC\Router;

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

    // Porductos
    $router->get('/productos/categorias', [ProductosControllers::class, 'productos/categorias']);
    $router->post('/productos/categorias', [ProductosControllers::class, 'productos/categorias']);

    // Pruebas
    $router->get('/pruebas/categorias', [PruebasControllers::class, 'pruebas/catergorias']);
    $router->post('/pruebas/categorias', [PruebasControllers::class, 'pruebas/catergorias']);

    // Administracion 
    $router->get('/categorias/admin', [CategoriasControllers::class, 'categorias_admin']);
    $router->get('/productos/admin', [ProductosControllers::class, 'productos_admin']);

    $router->comprobarRutas();

?>