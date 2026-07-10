<?php
include("conexion.php");

$titulo = $_POST['titulo'];
$autor  = $_POST['autor'];
$anio   = $_POST['anio'];

$sql = "INSERT INTO libros (titulo, autor, anio)
        VALUES ('$titulo', '$autor', '$anio')";

mysqli_query($conexion, $sql);

header("Location: ../catalogo.php");
exit;
?>
