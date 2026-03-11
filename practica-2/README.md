# Práctica 2 – Herencia y Reutilización de Código en PHP

## Objetivo
Usar herencia en PHP para reutilizar la clase `Usuario` y agregar funcionalidades en otra clase.

## Qué se hizo
- Se creó la clase `Admin` que extiende `Usuario`.  
- `Admin` tiene un método extra: `getRol()` que devuelve "Administrador".  
- La clase hereda nombre, correo y sus métodos de Usuario.

## Diferencias entre Usuario y Admin
- Usuario: nombre y correo, con getters y setters.  
- Admin: todo lo de Usuario + método `getRol()`.

## Evidencia
- Uso de `extends` y reutilización de código.  
- Código funciona sin errores.  
- Video demostrando que funciona.