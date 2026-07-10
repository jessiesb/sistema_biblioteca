<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Libro</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>


<div class="contenedor">
    <h1 class="titulo">Agregar libro</h1>

    <a class="boton" href="index.php">Inicio</a>
    <a class="boton" href="catalogo.php">Ver catálogo</a>
    

    <form method="POST" action="php/guardar_libro.php">
        <input type="text" name="titulo" placeholder="Título" required>
        <input type="text" name="autor" placeholder="Autor" required>
        <input type="number" name="anio" placeholder="Año" required>

        <button class="boton" type="submit">Guardar libro</button>
    </form>
</div>

</body>
</html>
