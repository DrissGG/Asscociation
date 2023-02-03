<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"
    />
    <script
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"
    ></script>
    <title>Association GSC</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="images/logo.jpg" alt="Logo" width="80" height="80"></a>
    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Activités</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lien/aide_devoir.php">Aide aux devoirs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class=" carousel-inner ">
        <div class="carousel-item active ">
            <img
                src="images/image1.jpg"
                alt="Image 1"
                class="d-block w-100"
            />
        </div>
        <div class="carousel-item">
            <img
                src="images/image2.jpg"
                alt="Image 2"
                class="d-block w-100  "
            />
        </div>
        <div class="carousel-item">
            <img
                src="images/image3.jpg"
                alt="Image 3"
                class="d-block w-100"
            />
        </div>
    </div>
    <a
        class="carousel-control-prev"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="prev"
    >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Précédent</span>
    </a>
    <a
        class="carousel-control-next"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="next"
    >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Suivant</span>
    </a>
</div>
<div class="container my-5">
    <h2 class="text-center">L'histoire de la France</h2>
    <p>La France est un pays situé en Europe occidentale. Sa longue histoire remonte à plusieurs milliers d'années avant JC et a connu de nombreux changements et événements marquants tels que la Révolution française, la Deuxième Guerre mondiale et la formation de la Cinquième République. </p>

    <div class="row">
        <div class="col-md-6">
            <img src="images/image1.jpg" class="img-fluid rounded mb-3" alt="Image 1">
            <p>Image 1 : Château de Versailles, un symbole de l'histoire de la France.</p>
        </div>

        <div class="col-md-6">
            <img src="images/image2.jpg" class="img-fluid rounded mb-3" alt="Image 2">
            <p>Image 2 : Les arcs de triomphe à Paris, construits pour célébrer les victoires militaires françaises.</p>
        </div>
    </div>
</div>


<footer class="bg-light py-3" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5 class="text-black">Adresse</h5>
                <p class="text-muted">
                    124 allée de coventry<br>
                    Montpellier, France, 34080
                </p>
            </div>
            <div class="col-md-4">
                <h5 class="text-black">Contact</h5>
                <p class="text-muted">
                    Mobile: 06 15 07 28 20<br>
                    E-mail: <a href="mailto:genesolidaires@gmail.com" class="text-white">genesolidaires@gmail.com</a>
                </p>
            </div>
            <div class="col-md-4">
                <h5 class="text-black">Localisation</h5>
                <p class="text-muted">
                    <a href="https://maps.google.com/?q=124+allée+de+coventry+Montpellier,+France,+34080" class="text-black">
                        <i class="fas fa-map-marker-alt"></i> Voir sur Google Maps
                    </a>
                </p>
            </div>
        </div>
    </div>
</footer>





</body>
</html>

<?php
?>
