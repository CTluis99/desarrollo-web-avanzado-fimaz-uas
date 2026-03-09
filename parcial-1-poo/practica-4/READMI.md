# Práctica 4 – Integración POO + Herencia + Validaciones + Excepciones

## Objetivo
Crear un mini-sistema de usuarios en PHP que combine encapsulamiento, herencia, polimorfismo básico, validaciones y manejo de excepciones, mostrando los datos en una tabla HTML.

## Qué se hizo
- Clase `Usuario`: base con atributos `nombre` y `correo`. Valida el correo y lanza excepción si es inválido.  
- Clase `Admin`: extiende `Usuario`, método `getRol()` devuelve "Administrador".  
- Clase `Alumno`: extiende `Usuario`, agrega atributo `matricula` y método `getRol()` devuelve "Alumno".  
- Clase `Invitado`: extiende `Usuario`, agrega atributo `empresa` y método `getRol()` devuelve "Invitado".  
- `index.php`: crea 3 usuarios válidos y 1 inválido, maneja errores con `try/catch` y muestra una tabla HTML con los usuarios válidos.

## Requisitos
- PHP 8+  
- XAMPP  
- Git/GitHub  

## Evidencia
- Código funciona sin errores fatales.  
- Excepción se captura y se muestra mensaje controlado.  
- Tabla HTML muestra correctamente nombre, correo, rol, matrícula y empresa.  
- Estructura de repositorio respetada.  
- Video demostrando funcionamiento.