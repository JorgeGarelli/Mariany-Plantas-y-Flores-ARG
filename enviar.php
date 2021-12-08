<?php

$destino= "jorge.garelli@gmail.com";
$nombre= $_POST["Nombre"];
$nombre= $_POST["Correo"];
$nombre= $_POST["Telefono"];
$nombre= $_POST["Mensaje"];
$contenido= "Nombre: " . $Nombre ."\nCorreo: " . $Correo . "\nTelefono: " . $Telefono . "\nMensaje" . $Mensaje;
mail($destino,"Contacto",$contenido);
header("Location:Gracias.html")

?>