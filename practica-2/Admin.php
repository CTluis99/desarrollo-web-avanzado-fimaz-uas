<?php
// Clase Admin que hereda de Usuario
class Admin extends Usuario {
    
    // Método que devuelve el rol del usuario
    public function getRol() {
        return "Administrador";
    }
}
?>
