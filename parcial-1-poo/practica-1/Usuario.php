<?php
// Definición de la clase Usuario
class Usuario {
    // Atributos privados de la clase
    private $nombre; // Guarda el nombre del usuario
    private $correo; // Guarda el correo electrónico del usuario

    // Constructor de la clase: se ejecuta al crear un objeto Usuario
    public function __construct($nombre, $correo) {
        $this->nombre = $nombre; // Inicializa el atributo nombre
        $this->correo = $correo; // Inicializa el atributo correo
    }

    // Método para obtener el nombre del usuario
    public function getNombre() {
        return $this->nombre;
    }

    // Método para obtener el correo del usuario
    public function getCorreo() {
        return $this->correo;
    }

    // Método para modificar el nombre del usuario
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    // Método para modificar el correo del usuario
    public function setCorreo($correo) {
        $this->correo = $correo;
    }
}
?>