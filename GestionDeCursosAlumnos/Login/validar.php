<?php
include('conexion.php');
$conexion=conectar();
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$_SESSION['usuario']=$usuario;


$consulta = "SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas >=1) {

    header("location:http://localhost/Proyectos%20PHP/Gesti%c3%b3n%20de%20cursos%20y%20alumnos/Alumnos/Alumno.php");
} else {
?>
    <?php
    include("index.php");

    ?>
    <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
