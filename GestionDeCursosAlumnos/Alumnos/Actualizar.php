<?php
include("Conectar.php");
$con=conectar();
$CodigoEstudiante=$_POST['CodigoEstudiante'];
$DocumentoIdentidad=$_POST['DocumentoIdentidad'];
$Nombres=$_POST['Nombres'];
$Apellidos=$_POST['Apellidos'];
$sql = "UPDATE alumno SET CodigoEstudiante = '$CodigoEstudiante', DocumentoIdentidad = '$DocumentoIdentidad', Nombres='$Nombres', Apellidos='$Apellidos' WHERE CodigoEstudiante='$CodigoEstudiante'";

$query=mysqli_query($con,$sql);

if ($query) {
    header("Location: Alumno.php");   
}