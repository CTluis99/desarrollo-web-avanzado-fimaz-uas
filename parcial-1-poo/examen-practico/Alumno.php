<?php

// Se incluye la clase Usuario para poder heredar sus propiedades
require_once "Usuario.php";

// Clase Alumno que hereda de Usuario
class Alumno extends Usuario{

// Atributo privado para guardar la matrícula del alumno
private $matricula;

// Constructor de la clase Alumno
// Recibe nombre, correo y matrícula
public function __construct($nombre, $correo, $matricula) { 
    
    // Llama al constructor de la clase padre (Usuario)
    parent::__construct($nombre, $correo); 
    
    // Guarda la matrícula en el atributo correspondiente
    $this->matricula = $matricula;
}

// Método que devuelve la matrícula del alumno
public function getMatricula(){
    return $this->matricula;
}

// Método que devuelve el rol del usuario
public function getRol(){
    return "Alumno";
}
}

?>