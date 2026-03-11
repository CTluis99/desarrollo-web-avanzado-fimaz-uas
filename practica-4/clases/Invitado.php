<?php
require_once "Usuario.php";

// Clase Invitado que hereda de Usuario
class Invitado extends Usuario {
    private $empresa; // Empresa del invitado

    // Constructor que inicializa nombre, correo y empresa
    public function __construct($nombre, $correo, $empresa) {
        parent::__construct($nombre, $correo);
        $this->empresa = $empresa;
    }

    // Devuelve la empresa
    public function getEmpresa() {
        return $this->empresa;
    }

    // Devuelve el rol del usuario
    public function getRol() {
        return "Invitado";
    }
}