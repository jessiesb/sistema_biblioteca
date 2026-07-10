<?php
include("conexion.php");

$id     = $_POST['id'];
$titulo = $_POST['titulo'];
$autor  = $_POST['autor'];
$anio   = $_POST['anio'];

$sql = "UPDATE libros SET
        titulo='$titulo',
        autor='$autor',
        anio='$anio'
        WHERE id=$id";

mysqli_query($conexion, $sql);

header("Location: ../catalogo.php");
exit;
?>
