<?php

define('TEMPLATES_URL', __DIR__ . 'templates');        // Super global de php para que busque la ruta al archivo
define('FUNCIONES_URL',  __DIR__ . 'funciones.php');

define('CARPETA_IMAGEN_USUARIOS', $_SERVER['DOCUMENT_ROOT']. '/imagenes_usuarios/');
define('CARPETA_IMAGEN_CATEGORIAS', $_SERVER['DOCUMENT_ROOT']. '/public/imagenes_categorias/');
define('CARPETA_IMAGEN_PRODUCTOS', $_SERVER['DOCUMENT_ROOT']. '/public/imagenes_productos/');
define('CARPETA_VIDEOS', $_SERVER['DOCUMENT_ROOT']. '/public/videos/');


function incluirTemplate(string $nombre, bool $inicio = false ){
    include TEMPLATES_URL . "/{$nombre}.php";
};

function debuguear($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}
function debug($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
}

// Escapa el HTML sanitizar los datos recibidos
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

function validar0Redireccionar(string $url){
    // Validar ID valido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id){
        header("Location: $url");
    }
    return $id;
}


?>