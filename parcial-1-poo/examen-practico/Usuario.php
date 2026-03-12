<?php

// Clase Usuario que representa un usuario del sistema
class Usuario {

// Atributo privado que almacena el nombre
private $nombre;

// Atributo privado que almacena el correo
private $correo;

// Constructor de la clase
// Recibe nombre y correo al crear el objeto
public function __construct($nombre, $correo) {

    // Guarda el nombre en el atributo
    $this->nombre = $nombre;

    // Valida que el correo tenga un formato válido
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {

        // Si el correo no es válido, se lanza una excepción
        throw new Exception("Correo inválido");
    }

    // Si el correo es válido, se guarda en el atributo
    $this->correo = $correo;
}

// Método que devuelve el nombre del usuario
public function getnombre(){
    return $this->nombre;
}

// Método que devuelve el correo del usuario
public function getcorreo(){
    return $this->correo;
}
}

?>
