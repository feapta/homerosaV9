
<?php 

// Pagina public/index.php

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\UsuariosControllers;

$router = new Router();


// Paginas
$router->get('/', [UsuariosControllers::class, 'login']);
$router->post('/', [UsuariosControllers::class, 'login']);

$router->get('/', [UsuariosControllers::class, 'domo']);