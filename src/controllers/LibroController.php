<?php
require_once 'models/Libro.php';
require_once 'models/PaqueteLibrosMatematicas.php';
require_once 'models/PaqueteLibrosLenguaje.php';

// Controlador para la gestión de libros y paquetes
class LibroController {
    private $paquetes = [];

    // Constructor del controlador
    public function __construct() {
        session_start();
        if (isset($_SESSION['paquetes'])) {
            $this->paquetes = $_SESSION['paquetes'];
        }
    }

    // Método para agregar un nuevo paquete de libros
    public function agregarPaquete($nombre, $precio, $tematica, $cantidad) {
        $libro = new Libro($nombre, $precio, $tematica);
        
        // Crear el paquete correspondiente según la temática
        if ($tematica === 'Matemáticas') {
            $paquete = new PaqueteLibrosMatematicas($libro, $cantidad);
        } else {
            $paquete = new PaqueteLibrosLenguaje($libro, $cantidad);
        }

        // Agregar el paquete a la lista y actualizar la sesión
        $this->paquetes[] = $paquete;
        $_SESSION['paquetes'] = $this->paquetes;
    }

    // Método para obtener todos los paquetes
    public function getPaquetes() {
        return $this->paquetes;
    }

    // Método para calcular los totales por temática
    public function getTotales() {
        $totalMatematicas = 0;
        $totalLenguaje = 0;

        foreach ($this->paquetes as $paquete) {
            if ($paquete->getProducto()->getTematica() === 'Matemáticas') {
                $totalMatematicas += $paquete->getImporteTotal();
            } else {
                $totalLenguaje += $paquete->getImporteTotal();
            }
        }

        return [
            'matematicas' => $totalMatematicas,
            'lenguaje' => $totalLenguaje
        ];
    }
}
