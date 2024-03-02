<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos_dos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Panel Administrativo | Growing Kids</title>
</head>

<body class="body-login">

    <div class="container rounded shadow contenedor-login">
        <div class="row align-items-stretch">
            <div class="d-none d-lg-block col-sm-5 col-md-5 col-lg-5 col-xl-6 rounded">
                <img src="../imagenes/fondo_nosotros.jpg" class="img-fluid w-100 img-login" alt="">
            </div>

            <div class="col bg-white p-3 rounded-end">
                <div class="text-center">
                    <img src="../imagenes/logo_2.png" alt="" width="100">
                </div>
                <h2 class="fw-bold text-center py-3 text-uppercase">Ingresar</h2>

                <!-- login  -->
                <form action="autentificar.php" method="post" name="formulario" class="text-center">
                    <?php
                    $errorusuario = isset($_GET["errorusuario"]);
                    if ($errorusuario == "SI") {
                        echo "<h3 class='aviso'>DATOS INCORRECTOS</h3>";
                    }
                    ?>
                    <div class="col-12 mb-4 mt-4 ">
                        <input class="form-control w-75 mx-auto d-block" type="text" placeholder="usuario" name="usuario" required>
                    </div>
                    <div class="col-12 mb-4 mt-4">
                        <input class="form-control w-75 mx-auto d-block" type="password" placeholder="contraseña" name="contrasena" required>
                    </div>

                    <div class="mx-auto d-block">
                        <button type="submit" class="btn btn-sm btn-info text-white text-uppercase w-25 ">Entrar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>