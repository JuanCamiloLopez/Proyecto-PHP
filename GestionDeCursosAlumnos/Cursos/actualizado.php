<?php
include("conexion.php");
$con = conectar();
$id = $_GET['id'];

$sql = "SELECT * FROM cursos WHERE codigoC = '$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="estilo.css">
</head>

<body style="background-color:aquamarine">

    <div class="container">
        <div class="frame">
            <div class="nav">
                <ul class"links">
                    <li class="signin-active"><a class="btn">Bienvenidos</a></li>

                </ul>
            </div>
            <div ng-app ng-init="checked = false">
                <form class="form-signin" action="actualizar.php" method="post">
                    <label for="username">Nombre del curso</label>
                    <input class="form-styling" type="text" name="nombreCurso" placeholder="" value="<?php echo $row['nombreCurso'] ?>" required />
                    <input class="form-styling"  readonly required name="codigoC" placeholder="" value="<?php echo $row['codigoC'] ?>"  />
                    <div class="btn-animate">
                        <input type="submit" value="Guardar" class="btn-signin" />
                        <br><br><br><br><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>