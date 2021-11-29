<?php
include("conexion.php");
$con=conectar();

$nombre_usuario=$_POST['nombre_usuario'];
$apellido=$_POST['apellido'];
$curp=$_POST['curp'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$pasword=$_POST['pasword'];


$sql="INSERT INTO usuario VALUES('$nombre','$apellido','$curp','$direccion'. '$telefono', '$correo', '$pasword')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuario.php");
    
}else {
}
?>