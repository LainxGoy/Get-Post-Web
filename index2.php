<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario GET</title>
</head>
<body>
    <h2>Envío por GET</h2>
    <form action="index2.php" method="GET">
        <label>Universidad:</label><br>
        <input type="text" name="universidad"><br>
        <label>Carrera:</label><br>
        <input type="text" name="carrera"><br>
        <label>Semestre:</label><br>
        <input type="text" name="semestre"><br>
        <input type="submit" value="Enviar"><br>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $universidad = isset($_GET["universidad"]) ? trim($_GET["universidad"]) : "";
    $carrera = isset($_GET["carrera"]) ? trim($_GET["carrera"]) : "";
    $semestre = isset($_GET["semestre"]) ? trim($_GET["semestre"]) : "";

    if (empty($universidad) || empty($carrera) || empty($semestre)) {
        echo "Coloque los datos por favor";
    } else {
        echo "Universidad: " . $universidad . "<br>";
        echo "Carrera: " . $carrera . "<br>";
        echo "Semestre: " . $semestre . "<br>";
    }
}
?>
