<?php

// Modelo Categorias

namespace Model;

class Categorias extends ActiveRecord {
    protected static $tabla = 'categorias';
    protected static $columnasDB = ['idcatepro','categoria', 'imagen'];

    public $idcatepro;
    public $categoria;
    public $imagen;

    public function __construct($args = []){
        $this->idcatepro = $args['idcatepro'] ?? null;
        $this->categoria = $args['categoria'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
    }

}