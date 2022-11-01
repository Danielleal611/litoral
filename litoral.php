<?php
include ("conexion.php");
require ("conexion.php");
$nombre = ($_POST["nombre"]);
$apellido = ($_POST["apellido"]);
$cedula = ($_POST["cedula"]);
$correo = ($_POST["correo"]);
$telefono = ($_POST["telefono"]);

$insertar = "INSERT INTO litoralista (Nombre, Apellido, Cedula, Correo, Telefono) VALUES ('$nombre', '$apellido', '$cedula', '$correo', '$telefono')";
$consulta = mysqli_query($enlace, $insertar);
if($consulta){
    echo "Registro exitoso.";
}
else{
    echo "No se realizó el registro";
}
?>