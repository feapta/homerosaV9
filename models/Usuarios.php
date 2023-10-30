<?php

// Modelo de usuarios

namespace Model;

class Usuarios extends ActiveRecord {
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'nombre', 'apellidos', 'email', 'password', 'imagen', 'token', 'confirmado', 'creado'];

    public $id;
    public $nombre;
    public $apellidos;
    public $email;
    public $password;
    public $password2;
    public $imagen;
    public $token;
    public $confirmado;
    public $creado;


    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellidos = $args['apellidos'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->password2 = $args['password2'] ?? '';
        $this->token = $args['token'] ?? '0';
        $this->confirmado = $args['confirmado'] ?? '0';
        $this->creado = date('Y/m/d');
    }


    // Mensajes de validacion para la creacion de una cuenta
    public function validarNuevaCuenta(){

        if(!$this->nombre){
            self::$alertas['error'] [] = 'El nombre es obligatorio';
        }
        if(!$this->apellidos){
            self::$alertas['error'] [] = 'Los apellidos son obligatorios';
        }
        if(!$this->email){
            self::$alertas['error'] [] = 'El email es obligatorio';
        }
        if(!$this->password){
            self::$alertas['error'] [] = 'El password es obligatorio';
        }
        if($this->password != $this->password2){
            self::$alertas['error'] [] = 'Los password no son iguales';
        }
        if(strlen($this->password) < 6 ){
            self::$alertas['error'] [] = 'El password debe contener al menos 6 caracteres';
        }
       
        return self::$alertas;
    }

    // Mensajes de validacion para el login y password
    public function validarLogin(){
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
    public function comprobaciones($password) {
        $resultado = password_verify($password, $this->password);
        if(!$resultado) {
            self::$alertas['error'][] = 'Password Incorrecto';
        } else if(!$this->confirmado){
            self::$alertas['error'][] = 'Cuenta no confirmada, por favor valla a su Email y confirmela';
        }else{
            return true;
        }
    }


    // Validar email si se olvido contraseña
    public function validarEmail(){
        if(!$this->email){
            self::$alertas['error'] [] = 'El email es obligatorio';
        }   
        return self::$alertas;
    }

    // Validar email si se olvido contraseña
    public function validarPassword(){
        if(!$this->password){
            self::$alertas['error'] [] = 'El password es obligatorio';
        }
        if(strlen($this->password) < 6 ){
            self::$alertas['error'] [] = 'El password debe contener al menos 6 caracteres';
        }
        return self::$alertas;
    }



    // Comprobar si exite cuenta
    public function existeUsuario(){
        $query = " SELECT * FROM " . self::$tabla . " WHERE email = '" . $this->email . "' LIMIT 1"; 
        $resultado = self::$db->query($query);

        if($resultado->num_rows){
            self::$alertas['error'] [] = 'El usuario ya esta registrado';
        }
        return $resultado;
    }

    // Hashear password
    public function hashPassword(){
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    // Crear un token unico
    public function crearToken(){
        $this->token = uniqid();    //Genera un numero unico, sirve para generar id unico y se cambia cada vez que actualizas
    }

}