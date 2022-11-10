<?php
include('Conectar.php');
$con=conectar();
$id=$_GET['id'];
$sql="SELECT * FROM alumno WHERE CodigoEstudiante = '$id'";
$query = mysqli_query($con,$sql);
$row= mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ACTUALIZAR</title>
        <link rel="stylesheet" href="Estilo.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body>
        <main id="continer_main">
            <section id="sectionForm">
                <div class="login-box">
                <h2>Actualizando</h2>
                        <form action="Actualizar.php" method="POST">
                            <div class="user-box">
                                <input type="Number" name="CodigoEstudiante"  readonly value="<?php echo$row['CodigoEstudiante'] ?>">
                                <label>Codigo Estudiante</label>
                            </div>
                            <div class="user-box">
                                <input type="Number"  name="DocumentoIdentidad" value="<?php echo$row['DocumentoIdentidad'] ?>" required="">
                                <label>Documento de Identidad</label>
                            </div>
                            <div class="user-box">
                                <input type="text" name="Nombres" value="<?php echo$row['Nombres'] ?>" required="">
                                <label>Nombre</label>
                            </div>
                            <div class="user-box">
                                <input type="text" name="Apellidos" value="<?php echo$row['Apellidos'] ?>" required="">
                                <label>Apellido</label>
                            </div>
                            <input type="submit" class="btne"  name="" value="Actualizar">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </form>
                </div>
            </section>
        </main>    
    </body>
</html>             
