<?php

require_once "Usuario.php";
require "Alumno.php";
require "Admin.php";

echo "<table border='1'>";
echo "<tr><th>Nombre</th><th>Correo</th><th>Rol</th><th>Matrícula</th></tr>";

try {
$alumno = new Alumno("Juan Perez", "juan@example.com", "1209");
echo "<tr>
<td>".$alumno->getNombre()."</td>
<td>".$alumno->getCorreo()."</td>
<td>".$alumno->getRol()."</td>
<td>".$alumno->getMatricula()."</td>
</tr>";

$admin = new Admin("Luis Castillo", "luis@example.com");
echo "<tr>
<td>".$admin->getNombre()."</td>
<td>".$admin->getCorreo()."</td>
<td>".$admin->getRol()."</td>
<td>—</td>;
</tr>";

$alumno = new Alumno("Saul Lopez", "saulesexample.com", "1210");
echo "<tr>
<td>".$alumno->getNombre()."</td>
<td>".$alumno->getCorreo()."</td>
<td>".$alumno->getRol()."</td>
<td>".$alumno->getMatricula()."</td>
</tr>";

}  

catch (Exception $e) {
    echo "<tr><td colspan='4'>Error: Correo inválido</td></tr>";
}


echo "</table>";

?>