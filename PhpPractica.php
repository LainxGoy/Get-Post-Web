<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario POST</title>
</head>
<body>
    <h2>Ejemplo de envío de información con PHP</h2>
    <form action="Practica_Datos.php" method="POST">
        <label>Nombre Completo:</label><br>
        <input type="text" name="nombre"><br>
        <label>Dirección:</label><br>
        <input type="text" name="direccion"><br>
        <label>Teléfono:</label><br>
        <input type="text" name="telefono"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST["nombre"]) ? trim($_POST["nombre"]) : "";
    $dir = isset($_POST["direccion"]) ? trim($_POST["direccion"]) : "";
    $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]) : "";

    if (empty($nombre) || empty($dir) || empty($telefono)) {
        echo "Coloque los datos por favor";
    } else {
        echo "Nombre: " . $nombre . "<br>";
        echo "Dirección: " . $dir . "<br>";
        echo "Teléfono: " . $telefono . "<br>";
    }
}
?>
