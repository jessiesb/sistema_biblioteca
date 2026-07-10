<?php include("php/conexion.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<div class="contenedor">
    <h1 class="titulo">Catálogo de libros</h1>

    <a class="boton" href="index.php">Inicio</a>
    <a class="boton" href="agregar_libro.php">Agregar libro</a>
    

    <table class="tabla">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Año</th>
            <th>Acciones</th>
        </tr>

        <?php
        $sql = "SELECT * FROM libros ORDER BY id DESC";
        $result = mysqli_query($conexion, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['titulo'] ?></td>
            <td><?= $row['autor'] ?></td>
            <td><?= $row['anio'] ?></td>

            <td>
                <a class="accion" href="php/editar_libro.php?id=<?= $row['id'] ?>">Editar</a>
                <a class="accion" href="php/eliminar_libro.php?id=<?= $row['id'] ?>"
                   onclick="return confirm('¿Eliminar este libro?')">Eliminar</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>
