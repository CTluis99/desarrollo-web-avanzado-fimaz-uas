<?php

// Se incluye la clase Usuario para poder heredar sus atributos y métodos
require_once "Usuario.php";

// Clase Admin que hereda de la clase Usuario
class Admin extends Usuario{ 
    
    // Método que devuelve el rol del usuario
    public function getRol(){
        return "Administrador";
    }
}

?>