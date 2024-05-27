<?php

// Modelo de productos

namespace Model;

class Productos extends ActiveRecord {
    protected static $tabla = 'productos';
    protected static $columnasDB = ['id', 'idcate', 'titulo', 'unidades', 'descripcion', 'precio_compra', 'envio', 'precio_venta', 'imagen1', 'imagen2', 'imagen3', 'video', 'tienda', 'enlace', 'fecha_entrada', 'fechafin_novedad'];

    public $id;
    public $idcate;
    public $titulo;
    public $unidades;
    public $descripcion;
    public $precio_compra;
    public $envio;
    public $precio_venta;
    public $imagen1;
    public $imagen2;
    public $imagen3;
    public $video;
    public $tienda;
    public $enlace;
    public $fecha_entrada;
    public $fechafin_novedad;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->idcate = $args['idcate'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->unidades = $args['unidades'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->precio_compra = $args['precio_compra'] ?? '';
        $this->envio = $args['envio'] ?? '';
        $this->precio_venta = $args['precio_venta'] ?? '';
        $this->imagen1 = $args['imagen1'] ?? '';
        $this->imagen2 = $args['imagen2'] ?? '';
        $this->imagen3 = $args['imagen3'] ?? '';
        $this->video = $args['video'] ?? '';
        $this->tienda = $args['tienda'] ?? '';
        $this->enlace = $args['enlace'] ?? '';
        $this->fecha_entrada = $args['fecha_entrada'] ?? '';
        $this->fechafin_novedad = $args['fechafin_novedad'] ?? '';
    }


}

?>