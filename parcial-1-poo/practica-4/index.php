<?php
require_once "clases/Usuario.php";
require_once "clases/Admin.php";
require_once "clases/Alumno.php";
require_once "clases/Invitado.php";

$usuarios = [];

try {
    // Crear usuarios válidos
    $usuarios[] = new Admin("Luis", "luis@gmail.com");
    $usuarios[] = new Alumno("Andres", "andres@gmail.com", "A123");
    $usuarios[] = new Invitado("Carlos", "carlos@gmail.com", "Microsoft");

    // Crear usuario con correo inválido
    $usuarios[] = new Usuario("Saul", "correo-invalido");
} catch (Exception $e) {
    echo "Error controlado: " . $e->getMessage() . "<br>";
}

// Mostrar tabla HTML
echo "<table border='1'>";
echo "<tr><th>Nombre</th><th>Correo</th><th>Rol</th><th>Matrícula</th><th>Empresa</th></tr>";

foreach ($usuarios as $u) {
    echo "<tr>";
    echo "<td>" . $u->getNombre() . "</td>";
    echo "<td>" . $u->getCorreo() . "</td>";
    echo "<td>" . $u->getRol() . "</td>";
    echo "<td>" . ($u instanceof Alumno ? $u->getMatricula() : "—") . "</td>";
    echo "<td>" . ($u instanceof Invitado ? $u->getEmpresa() : "—") . "</td>";
    echo "</tr>";
}

echo "</table>";