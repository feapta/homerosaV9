<?php

// Modelo de productos

namespace Model;

class Productos extends ActiveRecord {
    protected static $tabla = 'productos';
    protected static $columnasDB = ['id', 'autonumero', 'idcate', 'titulo', 'descripcion', 'unidades', 'video', 'tienda', 'enlace', 'fecha_entrada', 'fechafin_novedad'];

    public $id;
    public $autonumero;
    public $idcate;
    public $titulo;
    public $descripcion;
    public $unidades;
    public $video;
    public $tienda;
    public $enlace;
    public $fecha_entrada;
    public $fechafin_novedad;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->autonumero = $args['autonumero'] ?? null;
        $this->idcate = $args['idcate'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->unidades = $args['unidades'] ?? '';
        $this->video = $args['video'] ?? '';
        $this->tienda = $args['tienda'] ?? '';
        $this->enlace = $args['enlace'] ?? '';
        $this->fecha_entrada = $args['fecha_entrada'] ?? '';
        $this->fechafin_novedad = $args['fechafin_novedad'] ?? '';
    }


}

?>