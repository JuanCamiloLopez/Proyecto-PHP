<?php
include("conexion.php");
$con=conectar();
$codigoC=$_POST['codigoC'];
$nombreCurso=$_POST['nombreCurso'];

$sql = "UPDATE cursos SET  nombreCurso = '$nombreCurso' WHERE codigoC='$codigoC'";

$query=mysqli_query($con,$sql);

if ($query) {
    header("Location:tabla.php");   
}