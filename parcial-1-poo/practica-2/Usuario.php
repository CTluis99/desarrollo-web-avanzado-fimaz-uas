<?php
// Clase Usuario que representa a un usuario con nombre y correo
class Usuario {
    private $nombre; // Nombre del usuario
    private $correo; // Correo del usuario

    // Constructor para inicializar nombre y correo
    public function __construct($nombre, $correo) {
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    // Método para obtener el nombre del usuario
    public function getNombre() {
        return $this->nombre;
    }

    // Método para obtener el correo del usuario
    public function getCorreo() {
        return $this->correo;
    }

    // Método para cambiar el nombre del usuario
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    // Método para cambiar el correo del usuario
    public function setCorreo($correo) {
        $this->correo = $correo;
    }
}
?>

