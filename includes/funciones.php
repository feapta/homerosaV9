<?php

define('TEMPLATES_URL', __DIR__ . 'templates');        // Super global de php para que busque la ruta al archivo
define('FUNCIONES_URL',  __DIR__ . 'funciones.php');

define('CARPETA_IMAGEN_USUARIOS', $_SERVER['DOCUMENT_ROOT']. '/imagenesUsuarios/');


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


?>