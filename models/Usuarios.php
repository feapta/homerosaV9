<?php

// Modelo de usuarios

namespace Model;

class Usuarios extends ActiveRecord {
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'nombre', 'apellidos', 'email', 'password', 'imagen'];

    public $id;
    public $nombre;
    public $apellidos;
    public $email;
    public $password;
    public $password2;
    public $imagen;


    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellidos = $args['apellidos'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
    }


    // Mensajes de validacion para el login y password
    public function validarDatos(){
        if(!$this->email){
            self::$alertas['error'] [] = 'El email es obligatorio';
        }
        if(!$this->password){
            self::$alertas['error'] [] = 'El password es obligatorio';
        }
        if(strlen($this->password) < 6) {
            self::$alertas['error'][] = 'El Password debe tener al menos 6 caracteres';
        }
        return self::$alertas;
    }

    // Comprobar el password confirmado y verificado
    public function validarPass($password) {
        $resultado = password_verify($password, $this->password);

        if(!$resultado) {
            self::$alertas['error'][] = 'Password Incorrecto';
        } else {
            return true;
        }
    }

}