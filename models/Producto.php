<?php
// Clase abstracta que representa un producto genérico
abstract class Producto {
    protected $nombre;
    protected $precio;

    // Constructor de la clase Producto
    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    // Método para obtener el nombre del producto
    public function getNombre() {
        return $this->nombre;
    }

    // Método para obtener el precio del producto
    public function getPrecio() {
        return $this->precio;
    }
}

