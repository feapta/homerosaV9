<?php

// Modelo de productos

namespace Model;

class ProductosOpciones extends ActiveRecord {
    protected static $tabla = 'productos';
    protected static $columnasDB = ['id', 'titulo', 'unidades', 'video', 'imagen1', 'descripcion', 'opcion', 'precio_venta'];

    public $id;
    public $titulo;
    public $unidades;
    public $video;
    public $imagen1;
    public $descripcion;
    public $opcion;
    public $precio_venta;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->unidades = $args['unidades'] ?? '';
        $this->video = $args['video'] ?? '';
        $this->imagen1 = $args['imagen1'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->opcion = $args['opcion'] ?? '';
        $this->precio_venta = $args['precio_venta'] ?? '';
    }


}

?>