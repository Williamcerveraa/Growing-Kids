<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../css/estilos_dos.css">
    <title>Growing Kids | Panel Administrativo</title>
</head>

<body>

    <?php
    require '../conexion.php';
    $todos_datos = "SELECT * from inscripcion order by id_alumno ASC";
    $resultado = mysqli_query($conectar, $todos_datos);
    ?>

    <?php
    include 'menu_principal_admi.php';
    ?>

    <div class="container-fluid mt-3">
        <img src="../imagenes/fondo_nosotros.jpg" alt="" class="img-fluid w-100 rounded">
    </div>

    <div class="container-fluid border mt-3">
        <div class="section-heading">
            <h2 class="text-center text-uppercase mt-3">Bienvenido al Panel de Alumnos</h2>
        </div>
        <p class="text-center col-center">En este panel podrás visualizar, descargar y eliminar los registros de todos los alumnos dados de alta en el sistema, toda su información relevante.</p>

        <div class="table-responsive-sm">
            <table class="table mt-3 text-center">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Alumno</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Género</th>
                        <th scope="col">Tutor</th>
                        <th scope="col">Grado</th>
                        <th scope="col">Documentación</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($fila = mysqli_fetch_assoc($resultado)) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $fila["id_alumno"] ?></th>
                            <td><?php echo $fila["nombre_alumno"] ?></td>
                            <td><?php echo $fila["edad_alumno"] ?></td>
                            <td><?php echo $fila["genero_alumno"] ?></td>
                            <td><?php echo $fila["nombre_tutor"] ?></td>
                            <td><?php echo $fila["grado_alumno"] ?></td>
                            <td><a href="<?php echo $fila["acta_nacimiento"] ?>" target="_blank" class="btn btn-info text-white">Descargar</a></td>

                            <td>
                               
                                <button type="button" class="btn btn-danger" onclick="eliminar('eliminar_alumnos.php?id_alumno=<?php echo $fila['id_alumno']; ?>');">Eliminar</button>
                            </td>
                        </tr>
                    <?php

                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../js/funciones_eliminar.js"></script>

</body>

</html>