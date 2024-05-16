<?php

// Modelo Categorias

namespace Model;

class Categorias extends ActiveRecord {
    protected static $tabla = 'categorias';
    protected static $columnasDB = ['idcate','categoria', 'imagen'];

    public $idcate;
    public $categoria;
    public $imagen;

    public function __construct($args = []){
        $this->idcate = $args['idcate'] ?? null;
        $this->categoria = $args['categoria'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
    }

}