<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM cursos";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloTabla.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <title>Listado De cursos</title>
</head>

<body>
    <section id="sectionTable">
        <div class="content read">
            <h2>Listado de Curso</h2>
            <table>
                <thead>
                    <tr>
                        <td>Código Del Curso</td>
                        <td>Nombre Del Curso</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td><?php echo $row['codigoC'] ?></td>
                            <td><?php echo $row['nombreCurso'] ?></td>
                            <td class="actions">
                                <a href="actualizado.php?id=<?php echo $row['codigoC'] ?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                                <a href="borrar.php?id=<?php echo $row['codigoC'] ?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                            </td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
            <div class="pagination">
                <a href="http://localhost/Proyectos%20PHP/Gesti%c3%b3n%20de%20cursos%20y%20alumnos/Cursos/cursos.php"><i class="fas fa-angle-double-left fa-sm"></i></a>
            </div>
        </div>
    </section>
</body>

</html>