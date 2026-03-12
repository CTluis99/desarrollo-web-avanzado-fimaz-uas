<?php
require_once "Usuario.php";

// Clase Alumno que hereda de Usuario
class Alumno extends Usuario {
    private $matricula; // Matrícula del alumno

    // Constructor que inicializa nombre, correo y matrícula
    public function __construct($nombre, $correo, $matricula) {
        parent::__construct($nombre, $correo);
        $this->matricula = $matricula;
    }

    // Devuelve la matrícula
    public function getMatricula() {
        return $this->matricula;
    }

    // Devuelve el rol del usuario
    public function getRol() {
        return "Alumno";
    }
}