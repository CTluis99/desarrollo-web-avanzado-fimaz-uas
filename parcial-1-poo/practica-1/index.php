<?php
// Se incluye la definición de la clase Usuario
include 'Usuario.php';

// Se crea un objeto de la clase Usuario con nombre y correo
$usuario = new Usuario("Juan", "Juan@gmail.com");

// Se muestra el nombre del usuario
echo "Nombre: " . $usuario->getNombre() . "<br>";

// Se muestra el correo del usuario
echo "Correo: " . $usuario->getCorreo() . "<br>";
?>