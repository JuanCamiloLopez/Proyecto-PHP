<?php
include("conexion.php");
$con=conectar();
$id=$_GET['id'];

$sql="DELETE FROM `cursos` WHERE codigoC = '$id' ";
$query=mysqli_query($con,$sql); 
if ($query) {
    Header("Location:tabla.php");
}