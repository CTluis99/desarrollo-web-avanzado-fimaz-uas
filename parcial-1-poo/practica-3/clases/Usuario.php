<?php
// Clase base Usuario
class Usuario {
    protected $nombre; // Nombre del usuario (accesible en clases hijas)
    protected $correo; // Correo del usuario (accesible en clases hijas)

    // Constructor que inicializa nombre y correo
    // Valida el formato del correo y lanza excepción si es inválido
    public function __construct($nombre, $correo) {
        $this->nombre = $nombre;
        if (!str_contains($correo, "@") || !str_contains($correo, ".")) {
            throw new Exception("Formato invalido");
        }
        $this->correo = $correo;
    }

    // Devuelve el nombre del usuario
    public function getNombre() {
        return $this->nombre;
    }

    // Devuelve el correo del usuario
    public function getCorreo() {
        return $this->correo;
    }
}
?>
