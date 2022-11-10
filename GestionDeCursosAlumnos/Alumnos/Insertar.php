<?php
include("Conectar.php");
$con=conectar();

$CodigoEstudiante=$_POST['CodigoEstudiante'];
$DocumentoIdentidad=$_POST['DocumentoIdentidad'];
$Nombres=$_POST['Nombres'];
$Apellidos=$_POST['Apellidos'];

$sql="INSERT INTO alumno VALUES('$CodigoEstudiante','$DocumentoIdentidad','$Nombres','$Apellidos')";

$query=mysqli_query($con,$sql);

if ($query) {
    header("Location: Alumno.php");
}else{
    print("No se puedo insertar el registro del estudiante");
}