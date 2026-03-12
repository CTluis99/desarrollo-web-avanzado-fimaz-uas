<?php
require_once "Usuario.php";

// Clase Admin que hereda de Usuario
class Admin extends Usuario {

    // Devuelve el rol del usuario
    public function getRol() {
        return "Administrador";
    }
}