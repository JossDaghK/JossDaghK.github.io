<?php
$destino= "jossdaghe@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["email"];
$telefono = $_POST["telefono"];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono;
mail($destino,"contacto", $contenido);
header("Location:index.html");
?>