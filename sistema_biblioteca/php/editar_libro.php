<?php
include("conexion.php");

$id = $_GET['id'];
$sql = "SELECT * FROM libros WHERE id=$id";
$result = mysqli_query($conexion, $sql);
$libro = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Libro</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<div class="contenedor">
    <h1 class="titulo">Editar libro</h1>

    <form method="POST" action="actualizar_libro.php">
        <input type="hidden" name="id" value="<?= $libro['id'] ?>">

        <input type="text" name="titulo" value="<?= $libro['titulo'] ?>" required>
        <input type="text" name="autor" value="<?= $libro['autor'] ?>" required>
        <input type="number" name="anio" value="<?= $libro['anio'] ?>" required>

        <button class="boton" type="submit">Actualizar libro</button>
    </form>
</div>

</body>
</html>
