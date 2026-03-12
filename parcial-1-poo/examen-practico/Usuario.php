<?php

 class Usuario {
 private $nombre;
 private $correo;

 public function __construct($nombre, $correo) {
    $this->nombre = $nombre;

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("Correo inválido");
    }
    $this->correo = $correo;
}

  public function getnombre(){
    return $this->nombre;
  }

  public function getcorreo(){
    return $this->correo;
  }
 }
?>

