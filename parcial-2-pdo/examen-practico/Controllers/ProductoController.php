<?php
namespace Controllers;

use Config\Database;
use Models\Producto;
use PDO;

class ProductoController {
    private $connection;

    public function __construct() {
        $db = new Database();
        $this->connection = $db->getConnection();
    }

    public function crear(Producto $producto) {
        $sql = "INSERT INTO productos (nombre, descripcion, existencia, precio) VALUES (:nom, :desc, :exis, :prec)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(':nom', $producto->getNombre());
        $stmt->bindValue(':desc', $producto->getDescripcion());
        $stmt->bindValue(':exis', $producto->getExistencia(), PDO::PARAM_INT);
        $stmt->bindValue(':prec', $producto->getPrecio());
        return $stmt->execute();
    }

    public function listar() {
        $sql = "SELECT * FROM productos ORDER BY id DESC";
        $stmt = $this->connection->query($sql);
        return $stmt->fetchAll();
    }

    public function obtenerPorId($id) {
        $sql = "SELECT * FROM productos WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function actualizar(Producto $producto) {
        $sql = "UPDATE productos SET nombre = :nom, descripcion = :desc, existencia = :exis, precio = :prec WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(':id', $producto->getId(), PDO::PARAM_INT);
        $stmt->bindValue(':nom', $producto->getNombre());
        $stmt->bindValue(':desc', $producto->getDescripcion());
        $stmt->bindValue(':exis', $producto->getExistencia(), PDO::PARAM_INT);
        $stmt->bindValue(':prec', $producto->getPrecio());
        return $stmt->execute();
    }

    public function eliminar($id) {
        $sql = "DELETE FROM productos WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}