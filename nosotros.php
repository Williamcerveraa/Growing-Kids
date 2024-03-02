<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/estilos_dos.css">
    <title>Nosotros | Growing Kids</title>
</head>

<body>
    <?php
    include 'menu_principal.php';
    ?>

    <div class="container-fluid mt-3">
        <img src="imagenes/fondo_nosotros.jpg" alt="" class="img-fluid w-100 rounded">
    </div>

    <div class="container-fluid border mt-3">
        <div class="section-heading">
            <h2 class="text-center text-uppercase mt-3">Nuestras Áreas de Enseñanza</h2>
        </div>
        <p class="text-center col-center">Nos enfocamos en las áreas de vital importancia para el desarrollo personal, cognitivo y formando grandes humanos que harán cosas increíbles.</p>
        <div class="row d-flex justify-content-center">
            <div class="col-10 col-md-8 col-lg-3 mt-3 mb-3 ">
                <div class="card text-center pb-2 card-altura">
                    <img src="imagenes/nosotros_cards.jpg" class="img-fluid w-100  mx-auto d-block">
                    <div class="card-body">
                        <h3 class="card-tittle titulo-card">Conocimiento Artístico </h3>
                        <p>Con el correcto material didáctico y herramientas adecuadas, su intelecto no tendrá límites.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-10 col-md-8 col-lg-3 mt-3 mb-3">
                <div class="card text-center pb-2">
                    <img src="imagenes/nosotros_dos_cards.jpg" class="img-fluid w-100  mx-auto d-block">
                    <div class="card-body">
                        <h3 class="card-tittle titulo-card">Desarrollo Creativo</h3>
                        <p>Con el correcto material didáctico y herramientas adecuadas, su intelecto no tendrá límites.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-10 col-md-8 col-lg-3 mt-3 mb-3">
                <div class="card text-center pb-2">
                    <img src="imagenes/nosotros_tres_cards.jpg" class="img-fluid w-100  mx-auto d-block">
                    <div class="card-body"> 
                        <h3 class="card-tittle titulo-card">Desarrollo Intelectual</h3>
                        <p>Con el correcto material didáctico y herramientas adecuadas, su intelecto no tendrá límites.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
                <div class="col-10 col-md-8 col-lg-3 mt-3 mb-3">
                    <div class="card text-center  pb-2">
                        <img src="imagenes/nosotros_cuatro_cards.jpg" class="img-fluid w-100  mx-auto d-block">
                        <div class="card-body">
                            <h3 class="card-tittle titulo-card">Comunicación Social</h3>
                            <p>Las habilidades sociales son parte de la vida, trabajar en ellas es algo fundamental.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-10 col-md-8 col-lg-3 mt-3 mb-3">
                    <div class="card text-center  pb-2">
                        <img src="imagenes/nosotros_cinco_cards.jpg" class="img-fluid w-100  mx-auto d-block">
                        <div class="card-body">
                            <h3 class="card-tittle titulo-card">Independencia</h3>
                            <p>Formamos personas de carácter independiente, que puedan lograr todo lo que quieran solos.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-10 col-md-8 col-lg-3 mt-3 mb-3">
                    <div class="card text-center  pb-2">
                        <img src="imagenes/nosotros_seis_cards.jpg" class="img-fluid w-100  mx-auto d-block">
                        <div class="card-body">
                            <h3 class="card-tittle titulo-card">Cuidado Ambiental</h3>
                            <p>Con el cambio climático debemos enseñar a las nuevas generaciones esta importancia.
                            </p>
                        </div>
                    </div>
                </div>
        </div>
    </div>


    <?php
    include 'footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>