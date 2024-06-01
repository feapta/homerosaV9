<?php

// Modelo de productos

namespace Model;

class Trabajos extends ActiveRecord {
    protected static $tabla = 'trabajos';
    protected static $columnasDB = ['id', 'titulo', 'descripcion', 'imagen1', 'imagen2', 'imagen3', 'video', 'fecha_entrada'];

    public $id;
    public $titulo;
    public $descripcion;
    public $imagen1;
    public $imagen2;
    public $imagen3;
    public $video;
    public $fecha_entrada;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->imagen1 = $args['imagen1'] ?? '';
        $this->imagen2 = $args['imagen2'] ?? '';
        $this->imagen3 = $args['imagen3'] ?? '';
        $this->video = $args['video'] ?? '';
        $this->fecha_entrada = $args['fecha_entrada'] ?? '';
    }


}

?>