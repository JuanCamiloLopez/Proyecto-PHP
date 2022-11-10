<?php
include("Conectar.php");
$con=conectar();

$sql="SELECT * FROM alumno";
$query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pagina Alumno</title>
        <link rel="stylesheet" href="Estilo.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body>
        <main id="continer_main">
            <section id="sectionForm">
                <div class="login-box">
                <h2>Alumno</h2>
                        <form action="Insertar.php" method="POST">
                            <div class="user-box">
                                <input type="Number" name="CodigoEstudiante"  >
                                <label>Codigo Estudiante</label>
                            </div>
                            <div class="user-box">
                                <input type="Number"  name="DocumentoIdentidad" required="">
                                <label>Documento de Identidad</label>
                            </div>
                            <div class="user-box">
                                <input type="text" name="Nombres" required="">
                                <label>Nombre</label>
                            </div>
                            <div class="user-box">
                                <input type="text" name="Apellidos" required="">
                                <label>Apellido</label>
                            </div>
                            <input type="submit" class="btne"  name="" value="Enviar">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </form>
                </div>
            </section>

            <section id="sectionTable">
                <div class="content read">
                    <h2>Listado de estudiantes</h2>
                    <table>
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Documento Identidad</td>
                                <td>Nombres</td>
                                <td>Apellidos</td>
                                <td>Acciones</td>
                                </tr>
                        </thead>
                        <tbody>
                            <?php while ($row=mysqli_fetch_array($query)){?>
                            <tr>
                                <td><?php echo $row['CodigoEstudiante']?></td>
                                <td><?php echo $row['DocumentoIdentidad']?></td>
                                <td><?php echo $row['Nombres']?></td>
                                <td><?php echo $row['Apellidos']?></td>            
                                <td class="actions">      
                                <a href="Actualizando.php?id=<?php echo $row['CodigoEstudiante']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                                <a href="Borrar.php?id=<?php echo $row['CodigoEstudiante']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                                </td>
                            </tr>
                            <?php
                            }?>
                        </tbody>
                    </table>
                    <div class="pagination">
                        <a href="#"><i class="fas fa-angle-double-left fa-sm"></i></a>
                        <a href="#"><i class="fas fa-angle-double-right fa-sm"></i></a>
                    </div>
                </div>
            </section>
        </main> 
    </body>
</html> 