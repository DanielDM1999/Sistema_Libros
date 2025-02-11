<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Libros</title>
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2ecc71;
            --background-color: #ecf0f1;
            --text-color: #34495e;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: var(--background-color);
            color: var(--text-color);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            padding: 1rem 0;
        }

        main {
            flex: 1;
            padding: 2rem 0;
        }

        footer {
            background-color: var(--text-color);
            color: white;
            text-align: center;
            padding: 1rem 0;
            margin-top: auto;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1, h2, h3 {
            color: var(--primary-color);
        }

        .titulo{
            color: white;
        }
        .btn {
            display: inline-block;
            background-color: var(--secondary-color);
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #27ae60;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }

        .modal:target {
            display: block;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 5px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            text-decoration: none;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input, select {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: var(--secondary-color);
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #27ae60;
        }

        .resumen {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-top: 2rem;
        }

        .paquete {
            border-bottom: 1px solid #eee;
            padding: 10px 0;
        }

        @media (max-width: 768px) {
            .container {
                width: 95%;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1 class="titulo">Librería Canaria</h1>
    </header>

    <main>
        <div class="container">
            <h2>Gestión de Libros</h2>
            <a href="#modal-paquete" class="btn">Comprar Paquete</a>

            <div id="modal-paquete" class="modal">
                <div class="modal-content">
                    <a href="#" class="close">&times;</a>
                    <h2>Añadir Paquete</h2>
                    <form action="index.php" method="post">
                        <input type="text" name="nombre" placeholder="Nombre del libro" required>
                        <input type="number" name="precio" placeholder="Precio del libro" step="0.01" required>
                        <select name="tematica" required>
                            <option value="Matemáticas">Matemáticas</option>
                            <option value="Lenguaje">Lenguaje</option>
                        </select>
                        <input type="number" name="cantidad" placeholder="Cantidad" required>
                        <input type="submit" value="Añadir Paquete">
                    </form>
                </div>
            </div>

            <div class="resumen">
                <h2>Resumen de Paquetes</h2>
                <?php foreach ($paquetes as $paquete): ?>
                    <div class='paquete'>
                        <p><strong>Nombre:</strong> <?php echo $paquete->getProducto()->getNombre(); ?></p>
                        <p><strong>Temática:</strong> <?php echo $paquete->getProducto()->getTematica(); ?></p>
                        <p><strong>Precio unitario:</strong> $<?php echo $paquete->getProducto()->getPrecio(); ?></p>
                        <p><strong>Cantidad:</strong> <?php echo $paquete->getCantidad(); ?></p>
                        <p><strong>Importe total:</strong> $<?php echo $paquete->getImporteTotal(); ?></p>
                    </div>
                <?php endforeach; ?>
                <h3>Total Paquetes de Matemáticas: $<?php echo $totales['matematicas']; ?></h3>
                <h3>Total Paquetes de Lenguaje: $<?php echo $totales['lenguaje']; ?></h3>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Librería Canaria. Todos los derechos reservados.</p>
    </footer>
</body>
</html>