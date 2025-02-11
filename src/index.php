<?php
require_once 'controllers/LibroController.php';

// Crear una instancia del controlador
$controller = new LibroController();

// Procesar el formulario si se ha enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $tematica = $_POST['tematica'];
    $cantidad = $_POST['cantidad'];

    // Agregar el nuevo paquete
    $controller->agregarPaquete($nombre, $precio, $tematica, $cantidad);
    
    // Redirigir para evitar reenvío del formulario
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Obtener los paquetes y totales para mostrar en la vista
$paquetes = $controller->getPaquetes();
$totales = $controller->getTotales();

// Cargar la vista
require_once 'views/libro_view.php';

