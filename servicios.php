<?php

$conexion = mysqli_connect("localhost","root","","energiaverde");

$seleccion = $_POST["prestacion"];


$consulta = "insert into servicios(prestacion) values ('$seleccion')";
 mysqli_query($conexion, $consulta);
  mysqli_close($conexion);
  echo "<h1 style='background-color:aqua;'>Usuario Registrado</h1> <a href='login.html'>Volver</a>";

?>