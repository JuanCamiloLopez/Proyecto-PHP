<?php
include("Conectar.php");
$con=conectar();

$id=$_GET['id'];

$sql= "DELETE FROM alumno WHERE CodigoEstudiante='$id' ";
$query=mysqli_query($con,$sql);

if ($query) {
    Header("Location:Alumno.php");
}