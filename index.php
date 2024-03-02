<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/estilos_dos.css">
    <title>Growing Kids</title>
</head>

<body>

    <?php
    include 'menu_principal.php';
    ?>

    <div id="carousel-1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel-1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
            </button>
            <button type="button" data-bs-target="#carousel-1" data-bs-slide-to="1" aria-label="Slide 2">
            </button>
            <button type="button" data-bs-target="#carousel-1" data-bs-slide-to="2" aria-label="Slide 3">
            </button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagenes/banner_1.webp" class="d-block w-100" alt="banner-principal">
            </div>
            <div class="carousel-item">
                <img src="imagenes/banner_1.webp" class="d-block w-100" alt="banner-principal">
            </div>
            <div class="carousel-item">
                <img src="imagenes/banner_1.webp" class="d-block w-100" alt="banner-principal">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-1" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel-1" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    

    <?php
    include 'footer.php';
    ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>