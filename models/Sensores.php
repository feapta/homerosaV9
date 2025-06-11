<?php

// Modelo de sensores

namespace Model;

class Sensores extends ActiveRecord {
    protected static $tabla = 'medidas';
    protected static $columnasDB = ['id', 'h', 'd', 'm', 'y', 'te', 'te_in', 'hu', 'hu_su', 'uv', 'wa', 'fecha'];

    public $id;
    public $h;
    public $d;
    public $m;
    public $y;
    public $te;
    public $te_in;
    public $hu;
    public $hu_su;
    public $uv;
    public $wa;
    public $fecha;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->h = $args['h'] ?? null;
        $this->d = $args['d'] ?? null;
        $this->m = $args['m'] ?? '';
        $this->y = $args['y'] ?? '';
        $this->te = $args['te'] ?? '';
        $this->te_in = $args['te_in'] ?? '';
        $this->hu = $args['hu'] ?? '';
        $this->hu_su = $args['hu_su'] ?? '';
        $this->uv = $args['uv'] ?? '';
        $this->wa = $args['wa'] ?? '';
        $this->fecha = $args['fecha'] ?? '';
    }


}

?>