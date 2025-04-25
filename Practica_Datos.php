<?php
//procesar la informacion
echo "Estamos procesando sus datos...";
echo "<br>";
//var_dump($_SERVER);
echo "<br>";
echo "Revisando el array POST";
echo "<br>";
//var_dump($_POST);
//sacamos la info
$nombre = $_POST["nombre"];
$dir = $_POST["direccion"];
$telefono = $_POST["telefono"];

echo "Nombre: ".$nombre."<br>";
echo "Direccion: ".$dir."<br>";
echo "Telefono: ".$telefono."<br>";