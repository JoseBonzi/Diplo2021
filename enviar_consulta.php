<?php 
$nombre_formulario = $_POST['nombre'];
$apellido_formulario = $_POST['apellido'];
$edad_formulario = $_POST['edad'];
$email_formulario = $_POST['correo'];
$motivo_consulta_formu = $_POST['consulta'];
$mensaje_formulario = $_POST['mensaje'];

include("conexion.php");
// servidor SQL, usuario SQL, contraseña SQL, base de datos

mysqli_query($basedatos, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_formulario', '$apellido_formulario', $edad_formulario, '$email_formulario', '$motivo_consulta_formu', '$mensaje_formulario')");

header("Location: contacto.php?ok");
?>