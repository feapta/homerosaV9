<?php

namespace Model;

class ActiveRecord{

    // Base DE DATOS
    protected static $db;
    protected static $tabla = '';
    protected static $columnasDB = [];
    protected static $alertas = [];
    public $id;
    public $imagen; 

// VALIDACIONES
    public static function setAlerta($tipo, $mensaje) {
        static::$alertas[$tipo][] = $mensaje;
    }
    public static function getAlertas() {
        return static::$alertas;
    }
    public function validar() {
        static::$alertas = [];
        return static::$alertas;
    }

// BASE DE DATOS
    // Definir la conexión a la BD
    public static function setDB($database) {
         self::$db = $database;
    }
    // Consulta SQL para crear un objeto en Memoria
    public static function consultarSQL($query) {
        $resultado = self::$db->query($query);
        $array = [];
        
        while($registro = $resultado->fetch_assoc()) {
            $array[] = static::crearObjeto($registro);
        }

        $resultado->free();
        return $array;
    }
    // Crea el objeto en memoria que es igual al de la BD
    protected static function crearObjeto($registro) {
        $objeto = new static;

        foreach($registro as $key => $value ) {
            if(property_exists( $objeto, $key  )) {
                $objeto->$key = $value;
            }
        }

        return $objeto;
    }
    // Identificar y unir los atributos de la BD
    public function atributos() {
        $atributos = [];
        foreach(static::$columnasDB as $columna) {
            if($columna === 'id') continue;
            $atributos[$columna] = $this->$columna;
        }
        return $atributos;
    }
    // Sanitizar los datos antes de guardarlos en la BD
    public function sanitizarAtributos() {
        $atributos = $this->atributos();
        $sanitizado = [];
        foreach($atributos as $key => $value ) {
            $sanitizado[$key] = self::$db->escape_string($value);
        }
        return $sanitizado;
    }
    // Sincronizar el obejto en memoria con los cambios ralizados
    public function sincronizar($args) {
        foreach($args as $key => $value){
            if(property_exists($this, $key) && !is_null($value)){
                $this->$key = $value;
            }
        }
    }


// WHERE
    // Busca un registro por columna y valor
    public static function whereValor($columna, $valor) {
        $query = "SELECT * FROM " . static::$tabla  ." WHERE $columna = '$valor'";

        $resultado = self::consultarSQL($query);
        return array_shift( $resultado ) ;
    }

// IMAGENES
    // Subir archivo de imagenes
    public function setImagen($imagen, $carpeta){
        // Eliminar la imagen previa
        if(!is_null($this->id)){
            $this->borrarImagen($carpeta);
        }
        // Agrega la imagen
        if($imagen){
            $this->imagen = $imagen;
        }
    }

    // Borrar archivos de imagen
    public function borrarImagen($carpeta){
        $existeArchivo = file_exists($carpeta . $this->imagen);

        if($existeArchivo){
            unlink($carpeta . $this->imagen);
        }
    }

// TRUCK
      // Todos los registros
    public static function all() {
        $query = "SELECT * FROM " . static::$tabla;
        $resultado = self::consultarSQL($query);
        return $resultado;
    }

    // Guardar o actualizar
    public function guardar() {
        $resultado = '';
        if(!is_null($this->id)) {
            $resultado = $this->actualizar();   // Actualizar
        } else {
            $resultado = $this->crear();        // Crear
        }
        return $resultado;
    }

    // Crear
    public function crear() {
        // Sanitizar los datos
        $atributos = $this->sanitizarAtributos();

        // Insertar en la base de datos
        $query = " INSERT INTO " . static::$tabla . " ( ";
        $query .= join(', ', array_keys($atributos));
        $query .= " ) VALUES ('"; 
        $query .= join("', '", array_values($atributos));
        $query .= "') ";

        // Resultado de la consulta
        $resultado = self::$db->query($query);

        return [
            'resultado' =>  $resultado,
            'id' => self::$db->insert_id,
        ];
    }

    // Actualizar
    public function actualizar() {
        // Sanitizar los datos
        $atributos = $this->sanitizarAtributos();

        // Iterar para ir agregando cada campo de la BD
        $valores = [];
        
        foreach($atributos as $key => $value) {
            $valores[] = "{$key}='{$value}'";
        }
        
        // Consulta SQL
        $query = "UPDATE " . static::$tabla ." SET ";
        $query .=  join(', ', $valores );
        $query .= " WHERE id = '" . self::$db->escape_string($this->id) . "' ";
        $query .= " LIMIT 1 "; 

        // Actualizar BD
        $resultado = self::$db->query($query);
        return $resultado;
    }


      // Busca un registro por su id
    public static function find($id) {
        $query = "SELECT * FROM " . static::$tabla  ." WHERE id = $id ";
        $resultado = self::consultarSQL($query);
        return array_shift( $resultado ) ;
    }

    // Eliminar un Registro por su ID
    public function eliminar() {
        $query = "DELETE FROM "  . static::$tabla . " WHERE id = " . self::$db->escape_string($this->id) . " LIMIT 1";
        $resultado = self::$db->query($query);
        return $resultado;
    }










    
}