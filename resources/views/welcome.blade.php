<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malena Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="/css/styles.css">
    <!-- Estilos cards -->
    <link rel="stylesheet" href="/css/cards.css">
</head>

           
</head>
<body>

<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
        <img src="images/logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Contenido principal -->
<div class="container">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
            <img src="images/intro3.jpg" class="d-block w-100" alt="imagen 1">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
            <img src="images/intro2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/intro1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
</div>
<section class="container"> 
    <p class="titulo-productos">PRODUCTOS DESTACADOS</p>

    <div class="cars-destacados row row-cols-1 row-cols-md-3 g-4">

    <div class="card col">
        <div class="card-body h-100">
            <div class="img-card">
                <img src="/images/intro2.jpg" class="card-img-top" alt="...">
                </div>
             <h5 class="card-title">Card Title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div>
            <button class="buton-card">Add card</button>
        </div>
    </div>
    


    </div>
    </div>



</section>

<section class=" container informacion">

<div class="informacion_text">
     Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci, quod ab repellat, voluptate consectetur quasi voluptates eos rerum commodi quia molestiae velit dolor animi tempore quis qui vitae corrupti hic?

     Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci, quod ab repellat, voluptate consectetur quasi voluptates eos rerum commodi quia molestiae velit dolor animi tempore quis qui vitae corrupti hic?

     Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci, quod ab repellat, voluptate consectetur quasi voluptates eos rerum commodi quia molestiae velit dolor animi tempore quis qui vitae corrupti hic?
</div>
<div class="informacion_img"><img src="/images/fondo_section.jpg" alt=""></div>

</section>

<footer class="bg-dark text-light text-center py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <img src="/images/logo.png" alt=""><p class="mb-0">© 2024 Malena Home. <br>
                 Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS (opcional, solo si planeas utilizar componentes de JavaScript de Bootstrap) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
