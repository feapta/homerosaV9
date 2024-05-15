<?php

// Modelo de productos

namespace Model;

class Productos extends ActiveRecord {
    protected static $tabla = 'productos';
    protected static $columnasDB = ['idproducto', 'idcatepro', 'nombre', 'cantidad', 'descripcion', 'preciocompra', 'envio', 'precioventa', 'imagen1', 'imagen2', 'imagen3', 'video', 'tienda', 'enlace', 'fechaentrada', 'fechafinnovedad'];

    public $idproducto;
    public $idcatepro;
    public $nombre;
    public $cantidad;
    public $descripcion;
    public $preciocompra;
    public $envio;
    public $precioventa;
    public $imagen1;
    public $imagen2;
    public $imagen3;
    public $video;
    public $tienda;
    public $enlace;
    public $fechaentrada;
    public $fechafinnovedad;

    public function __construct($args = []) {
        $this->idproducto = $args['idproducto'] ?? null;
        $this->idcatepro = $args['idcatepro'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->cantidad = $args['cantidad'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->preciocompra = $args['preciocompra'] ?? '';
        $this->envio = $args['envio'] ?? '';
        $this->precioventa = $args['precioventa'] ?? '';
        $this->imagen1 = $args['imagen1'] ?? '';
        $this->imagen2 = $args['imagen2'] ?? '';
        $this->imagen3 = $args['imagen3'] ?? '';
        $this->video = $args['video'] ?? '';
        $this->tienda = $args['tienda'] ?? '';
        $this->enlace = $args['enlace'] ?? '';
        $this->fechaentrada = $args['fechaentrada'] ?? '';
        $this->fechafinnovedad = $args['fechafinnovedad'] ?? '';
    }


}