# Práctica 1 – Creación de Clases y Encapsulamiento en PHP

## Objetivo de la práctica
Aplicar los fundamentos de la Programación Orientada a Objetos en PHP, implementando una clase con atributos privados, constructor y métodos de acceso, siguiendo buenas prácticas de encapsulamiento.

## Descripción de la clase creada
Se creó la clase `Usuario` con los siguientes atributos privados:  
- `nombre`  
- `correo`  

La clase incluye:  
- Un constructor para inicializar los atributos.  
- Métodos `getNombre()` y `getCorreo()` para obtener los valores de los atributos.  
- Métodos `setNombre($nombre)` y `setCorreo($correo)` para modificar los valores de los atributos.  

Esto garantiza que los datos de la clase estén encapsulados y protegidos del acceso directo desde fuera de la clase.

## Instrucciones de ejecución
1. Abrir el servidor local XAMPP y activar Apache.  
2. Colocar la carpeta `practica-1` dentro de `htdocs` del XAMPP.  
3. Abrir `index.php` desde el navegador usando la URL:  http://localhost/practica-1/index.php
4. El navegador mostrará el nombre y correo del usuario utilizando los métodos getters de la clase `Usuario`.  

## Evidencia mínima
- Clase funcional y sin errores.  
- Uso correcto de encapsulamiento mediante atributos privados y métodos getters y setters.  
- Salida correcta en navegador.  
- Video demostrando el funcionamiento del código.