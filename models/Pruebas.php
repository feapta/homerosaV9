<?php

// Modelo de productos

namespace Model;

class Pruebas extends ActiveRecord {
    protected static $tabla = 'pruebas';
    protected static $columnasDB = ['idprueba', 'idcatepro', 'nombre', 'descripcion', 'fecha', 'imagen1', 'video'];

    public $idproducto;
    public $idcatepro;
    public $nombre;
    public $descripcion;
    public $fecha;
    public $imagen1;
    public $video;

    public function __construct($args = []) {
        $this->idproducto = $args['idproducto'] ?? null;
        $this->idcatepro = $args['idcatepro'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->fecha = $args['cantidad'] ?? '';
        $this->imagen1 = $args['imagen1'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
    }


}