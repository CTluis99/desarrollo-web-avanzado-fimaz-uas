<?php 
// Incluye la clase base Usuario
require_once "Usuario.php";

// Clase Alumno que hereda de Usuario
class Alumno extends Usuario {
    private $matricula; // Matrícula del alumno

    // Constructor que inicializa nombre, correo y matrícula
    public function __construct($nombre, $correo, $matricula) {
        parent::__construct($nombre, $correo); // Llama al constructor de Usuario
        $this->matricula = $matricula; // Asigna la matrícula
    }

    // Método que devuelve el rol del usuario
    public function getRol() {
        return "Alumno";
    }

    // Método que devuelve la matrícula del alumno
    public function getMatricula() {
        return $this->matricula;
    }
}
?>
