# Práctica 3 – Sistema de Usuarios con Validaciones y Excepciones

## Objetivo
Crear un sistema de usuarios en PHP más completo usando herencia, validaciones y manejo de excepciones para controlar errores de forma segura.

## Descripción del sistema
- Clase `Usuario`: clase base con atributos `nombre` y `correo`.  
  - Valida que el correo tenga formato correcto.  
  - Lanza una excepción si el correo es inválido.  
- Clase `Admin`: extiende `Usuario` y agrega método `getRol()` que devuelve `"Administrador"`.  
- Clase `Alumno`: extiende `Usuario`, agrega atributo `matricula` y método `getRol()` que devuelve `"Alumno"`.

## Flujo de clases
1. Se crean objetos `Admin` o `Alumno` usando la clase base `Usuario`.  
2. Se manejan errores con `try/catch` al crear usuarios con correo inválido.  
3. Los mensajes de error se muestran controladamente sin detener el programa.  

## Evidencia
- Uso correcto de excepciones (`try/catch`).  
- Código estructurado, legible y siguiendo buenas prácticas POO.  
- Video mostrando el sistema funcionando.