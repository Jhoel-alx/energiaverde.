<?php

$conexion = mysqli_connect("localhost","root","","energiaverde");

$tipoidentificacion = $_POST["tipoidentificacion"];
$numeroidentificacion = $_POST["numeroidentificacion"];
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];

$consulta = "insert into usuarios(tipoidentificacion,numeroidentificacion,correo,contrasena) values ('$tipoidentificacion','$numeroidentificacion','$correo','$contrasena')";
 mysqli_query($conexion, $consulta);
  mysqli_close($conexion);
  echo "<h1 style='background-color:aqua;'>Usuario Registrado</h1> <a href='login.html'>Volver</a>";

?>