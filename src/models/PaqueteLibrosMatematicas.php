<?php
require_once 'Libro.php';

// Clase que representa un paquete de libros de matemáticas
class PaqueteLibrosMatematicas {
    private $productos;
    private $cantidad;
    private $importeTotal;

    // Constructor de la clase PaqueteLibrosMatematicas
    public function __construct(Libro $libro, $cantidad) {
        $this->productos = $libro;
        $this->cantidad = $cantidad;
        $this->calcularImporteTotal();
    }

    // Método privado para calcular el importe total del paquete
    private function calcularImporteTotal() {
        $this->importeTotal = $this->productos->getPrecio() * $this->cantidad;
    }

    // Método para obtener el importe total del paquete
    public function getImporteTotal() {
        return $this->importeTotal;
    }

    // Método para obtener la cantidad de libros en el paquete
    public function getCantidad() {
        return $this->cantidad;
    }

    // Método para obtener el libro del paquete
    public function getProducto() {
        return $this->productos;
    }
}

