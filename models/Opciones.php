<?php

// Modelo de productos

namespace Model;

class Opciones extends ActiveRecord {
    protected static $tabla = 'opciones';
    protected static $columnasDB = ['id', 'idproducto', 'opcion', 'medidas', 'color', 'notas', 'precio_compra', 'envio', 'precio_venta', 'imagen1', 'imagen2', 'imagen3'];

    public $id;
    public $idproducto;
    public $opcion;
    public $medidas;
    public $color;
    public $notas;
    public $precio_compra;
    public $envio;
    public $precio_venta;
    public $imagen1;
    public $imagen2;
    public $imagen3;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->id = $args['idproducto'] ?? null;
        $this->opcion = $args['opcion'] ?? '';
        $this->medidas = $args['medidas'] ?? '';
        $this->color = $args['color'] ?? '';
        $this->notas = $args['notas'] ?? '';
        $this->precio_compra = $args['precio_compra'] ?? '';
        $this->envio = $args['envio'] ?? '';
        $this->precio_venta = $args['precio_venta'] ?? '';
        $this->imagen1 = $args['imagen1'] ?? '';
        $this->imagen2 = $args['imagen2'] ?? '';
        $this->imagen3 = $args['imagen3'] ?? '';
    }


}

?>