<?php
include("conexion.php");
$con=conectar();
$cursos=$_POST['cursos'];


$sql="INSERT INTO `cursos` (`codigoC`, `nombreCurso`)VALUES(NULL,'$cursos')";
$query=mysqli_query($con,$sql);

if ($query) {
    header("Location: tabla.php");
}