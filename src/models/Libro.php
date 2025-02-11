<?php
require_once 'Producto.php';

// Clase Libro que hereda de Producto
class Libro extends Producto {
    private $tematica;

    // Constructor de la clase Libro
    public function __construct($nombre, $precio, $tematica) {
        parent::__construct($nombre, $precio);
        $this->tematica = $tematica;
    }

    // Método para obtener la temática del libro
    public function getTematica() {
        return $this->tematica;
    }
}

