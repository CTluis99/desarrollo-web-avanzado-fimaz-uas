<?php

// Se incluyen las clases necesarias para el programa
require_once "Usuario.php";
require "Alumno.php";
require "Admin.php";

// Se crea una tabla HTML para mostrar los datos
echo "<table border='1'>";
echo "<tr><th>Nombre</th><th>Correo</th><th>Rol</th><th>Matrícula</th></tr>";

try {

// Se crea un objeto de tipo Alumno con datos válidos
$alumno = new Alumno("Juan Perez", "juan@example.com", "1209");

// Se muestran los datos del alumno en la tabla
echo "<tr>
<td>".$alumno->getNombre()."</td>
<td>".$alumno->getCorreo()."</td>
<td>".$alumno->getRol()."</td>
<td>".$alumno->getMatricula()."</td>
</tr>";

// Se crea un objeto de tipo Admin
$admin = new Admin("Luis Castillo", "luis@example.com");

// Se muestran los datos del administrador
echo "<tr>
<td>".$admin->getNombre()."</td>
<td>".$admin->getCorreo()."</td>
<td>".$admin->getRol()."</td>
<td>—</td>
</tr>";

// Se crea otro objeto Alumno pero con correo inválido
// Esto provocará que se lance una excepción
$alumno = new Alumno("Saul Lopez", "saulesexample.com", "1210");

// Si no hubiera error, se mostrarían sus datos
echo "<tr>
<td>".$alumno->getNombre()."</td>
<td>".$alumno->getCorreo()."</td>
<td>".$alumno->getRol()."</td>
<td>".$alumno->getMatricula()."</td>
</tr>";

}  

// Captura de errores en caso de que ocurra una excepción
catch (Exception $e) {
    echo "Error: Correo inválido ";
}

// Se cierra la tabla HTML
echo "</table>";

?>