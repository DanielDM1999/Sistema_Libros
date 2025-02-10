# UT5 - Sistema de Compra de Paquetes de Libros

## Introducción

Este proyecto implementa un sistema de gestión de libros para una librería, permitiendo la creación y seguimiento de paquetes de libros de matemáticas y lenguaje. El sistema está diseñado para cumplir con requisitos específicos de modelado de objetos y funcionalidad, utilizando PHP como lenguaje de programación principal.

**Desarrollado por:** Daniel Delgado Meneses

## Estructura del proyecto

- `index.php`: Punto de entrada de la aplicación.
- `Producto.php`: Clase abstracta base para los productos.
- `Libro.php`: Clase que representa un libro individual.
- `PaqueteLibrosMatematicas.php`: Clase para paquetes de libros de matemáticas.
- `PaqueteLibrosLenguaje.php`: Clase para paquetes de libros de lenguaje.
- `LibroController.php`: Controlador que maneja la lógica de negocio.
- `libro_view.php`: Vista que muestra la interfaz de usuario.

## Características Principales

- **Gestión de Productos:**
  - Creación de libros individuales.
  - Creación de paquetes de libros de matemáticas y lenguaje.
- **Cálculo de Totales:**
  - Cálculo del importe total por paquete.
  - Cálculo de totales por categoría (Matemáticas y Lenguaje).
- **Interfaz de Usuario:**
  - Formulario para agregar nuevos paquetes de libros.
  - Visualización de paquetes adquiridos.
  - Resumen de totales por categoría.

## Instalación y Configuración

1. Clone o descargue este repositorio en la carpeta de su servidor web local (por ejemplo, `htdocs` para XAMPP).
2. Configure su servidor web local para que apunte al directorio del proyecto.
3. Asegúrese de que PHP esté correctamente configurado en su entorno de desarrollo.
4. Acceda a la aplicación a través de su navegador web visitando `http://localhost/nombre-de-su-carpeta-de-proyecto`.

## Uso

1. Acceda a la aplicación a través de su navegador web.
2. Utilice el formulario para agregar nuevos paquetes de libros, especificando el nombre, precio, cantidad y temática.
3. Observe cómo se actualizan los paquetes adquiridos y los totales por categoría en tiempo real.
