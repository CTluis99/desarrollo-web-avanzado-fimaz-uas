<?php
// Se incluyen las clases Usuario y Admin
include "Usuario.php";
include "Admin.php";

// Crear un objeto Admin
$objAdmin = new Admin("Luis Castillo", "luisct515@gmail.com");

// Mostrar información del Admin
echo "Nombre " . $objAdmin->getnombre() . "<br>";
echo "Correo " . $objAdmin->getcorreo() . "<br>";
echo "Rol" . $objAdmin->getRol();
?>