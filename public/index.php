<?php 

    // Pagina public/index.php

    require_once __DIR__ . '/../includes/app.php';

    use MVC\Router;

use Controllers\ProductosControllers;
use Controllers\PruebasControllers;
use Controllers\TrabajosControllers;
use Controllers\UsuariosControllers;
use Controllers\TruckControllers;
use Controllers\CategoriasControllers;
use Controllers\EliminarControllers;
use Controllers\SensoresControllers;


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
    $router->get('/productosSeleccionado', [ProductosControllers::class, 'productoSeleccionado']);

// Pruebas
    $router->get('/pruebas/categorias', [PruebasControllers::class, 'pruebas/catergorias']);
    $router->post('/pruebas/categorias', [PruebasControllers::class, 'pruebas/catergorias']);

// Trabajos
    $router->get('/trabajos', [TrabajosControllers::class, 'trabajos']);
    


    

// Administracion

// Sensores
    $router->post('/sensores/temp', [SensoresControllers::class, 'Temp_listar']);
    $router->post('/sensores/hume', [SensoresControllers::class, 'Hume_listar']);


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
    $router->post('/productos/admin/guardar', [ProductosControllers::class, 'guardar']);

    $router->get('/productos/admin/crear', [ProductosControllers::class, 'productos_crear']);
    $router->post('/productos/admin/crear', [ProductosControllers::class, 'productos_crear']);

    $router->get('/productos/admin/edicion', [ProductosControllers::class, 'productos_edicion']);
    $router->post('/productos/admin/edicion', [ProductosControllers::class, 'productos_edicion']);
    $router->post('/productos/admin/edicion_P', [ProductosControllers::class, 'productos_edicion_P']);

// Opciones
    $router->get('/opciones/admin/crear', [ProductosControllers::class, 'opciones_crear']);
    $router->post('/opciones/admin/crear', [ProductosControllers::class, 'opciones_crear']);

    $router->get('/opciones/admin/edicion', [ProductosControllers::class, 'opciones_edicion']);
    $router->post('/opciones/admin/edicion', [ProductosControllers::class, 'opciones_edicion']);


// Trabajos
    $router->get('/trabajos/admin', [TrabajosControllers::class, 'trabajos_admin']);
    $router->post('/trabajos/admin_P', [TrabajosControllers::class, 'trabajos_admin_P']);

    $router->get('/trabajos/admin/crear', [TrabajosControllers::class, 'trabajos_crear']);
    $router->post('/trabajos/admin/crear', [TrabajosControllers::class, 'trabajos_crear']);

    $router->get('/trabajos/admin/edicion', [TrabajosControllers::class, 'trabajos_edicion']);
    $router->post('/trabajos/admin/edicion', [TrabajosControllers::class, 'trabajos_edicion']);


// Eliminar
    $router->post('/eliminar', [EliminarControllers::class, 'eliminar']);


    $router->comprobarRutas();


    
?>