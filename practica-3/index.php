<?php
// Se incluyen todas las clases necesarias
require_once "clases/Usuario.php";
require_once "clases/Admin.php";
require_once "clases/Alumno.php";

try {
    // Crear un usuario
    $usuario1 = new Usuario("Luis", "luisct2515@gmail.com");
    echo "Usuario creado: " . $usuario1->getNombre() . " (" . $usuario1->getCorreo() . ")<br>";

    // Crear un alumno con matrícula
    $alumno1 = new Alumno("Andres", "alguien@gmail.com", "AB129");
    echo "Alumno creado: " . $alumno1->getNombre() . " - Con matricula: " . $alumno1->getMatricula() . "<br>";

    // Crear un administrador
    $admin1 = new Admin("Jorge", "jg2020@gmail.com");
    echo "Admin creado: " . $admin1->getNombre() . " - Rol " . $admin1->getRol() . "<br>";

    // Intento de crear un usuario con correo inválido
    $usuario2 = new Usuario("Saul", "Correo-invalido");
    echo "Usuario creado: " . $usuario2->getNombre() . "<br>";

} catch (Exception $e) {
    // Captura errores de creación (como correo inválido)
    echo "Error controlado: " . $e->getMessage() . "<br>";
}
?>