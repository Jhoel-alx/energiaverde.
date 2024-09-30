<?php

$conexion = mysqli_connect("localhost","root", "","energiaverde");

$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];

$consulta = mysqli_query($conexion,"select * from usuarios where correo='$correo' and contrasena='$contrasena' ");

$filas = mysqli_num_rows($consulta);

if($filas == 1)
{
    header("location:interfaz.html");
}
else {
    echo "<h1 style=´background-color:rose;´>Verifique su correo y contraseña</h1> <a herf='interfaz.html>Volver</a>'";
}

?>