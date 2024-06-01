<?php 

    // Pagina public/index.php

    require_once __DIR__ . '/../includes/app.php';

    use MVC\Router;

use Controllers\NovedadesControllers;
use Controllers\ProductosControllers;
use Controllers\PruebasControllers;
use Controllers\TrabajosControllers;
use Controllers\UsuariosControllers;
use Controllers\TruckControllers;
use Controllers\CategoriasControllers;
use Controllers\EliminarControllers;


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
    $router->get('/categorias', [CategoriasControllers::class, 'categorias']);
    $router->get('/pruebas', [TruckControllers::class, 'pruebas']);

// Productos
    $router->get('/productos', [ProductosControllers::class, 'listadoProductos']);

// Pruebas
    $router->get('/pruebas/categorias', [PruebasControllers::class, 'pruebas/catergorias']);
    $router->post('/pruebas/categorias', [PruebasControllers::class, 'pruebas/catergorias']);

// Trabajos
    $router->get('/trabajos', [TrabajosControllers::class, 'trabajos']);
    


    

// Administracion

// Categorias
    $router->get('/categorias/admin', [CategoriasControllers::class, 'categorias_admin']);
    $router->post('/categorias/admin_P', [CategoriasControllers::class, 'categorias_admin_P']);

    $router->get('/categorias/admin/crear', [CategoriasControllers::class, 'categorias_crear']);
    $router->post('/categorias/admin/crear', [CategoriasControllers::class, 'categorias_crear']);

    $router->get('/categorias/admin/edicion', [CategoriasControllers::class, 'categorias_edicion']);
    $router->post('/categorias/admin/edicion', [CategoriasControllers::class, 'categorias_edicion']);

// Productos
    $router->get('/productos/admin', [ProductosControllers::class, 'productos_admin']);
    $router->post('/productos/admin_P', [ProductosControllers::class, 'productos_admin_P']);

    $router->get('/productos/admin/crear', [ProductosControllers::class, 'productos_crear']);
    $router->post('/productos/admin/crear', [ProductosControllers::class, 'productos_crear']);

    $router->get('/productos/admin/edicion', [ProductosControllers::class, 'productos_edicion']);
    $router->post('/productos/admin/edicion', [ProductosControllers::class, 'productos_edicion']);


    // Eliminar
    $router->post('/eliminar', [EliminarControllers::class, 'eliminar']);


    $router->comprobarRutas();


    
?>